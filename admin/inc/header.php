<?php 
    session_start();
    $name = isset($_SESSION["NAME"]) ? $_SESSION["NAME"] : "";
    if (empty($name)) {
        header("location:index.php?access=failed");
    }
?>

<header class="shadow">
    <nav class="navbar navbar-expand-lg bg-body-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CMS Diri</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Page
                    </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <?php 
                      if (isset($_SESSION["LEVEL"]) && $_SESSION["LEVEL"] == 1) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=user">User</a>
                        </li>
                        <li class="nav-item">
                            <a href="?page=manage-profile" class="nav-link">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="?page=testimonials" class="nav-link">Testimoni</a>
                        </li>
                <?php } ?>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $name; ?>
                    </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="php/keluar.php">Keluar</a></li>
                </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>