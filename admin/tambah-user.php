<?php 
    include "config/koneksi.php";

    if (isset($_POST["simpan"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = sha1($_POST["password"]);

        $query = mysqli_query($config, "INSERT INTO users(name, email, password) VALUES('$name', '$email', '$password')");
        if ($query) {
            header("location:user.php?tambah=berhasil");
        }
    }

    $header = isset($_GET["edit"]) ? "Edit" : "Tambah";
    $tombol = isset($_GET["edit"]) ? "ubah" : "simpan";
    $id_user = isset($_GET["edit"]) ? $_GET["edit"] : "";
    $queryEdit = mysqli_query($config, "SELECT * FROM users WHERE id='$id_user'");
    $rowEdit = mysqli_fetch_assoc($queryEdit);

    if (isset($_GET["edit"])) {
        $nilaiName = $rowEdit["name"];
        $nilaiEmail = $rowEdit["email"];
    } else {
        $nilaiName = "";
        $nilaiEmail = "";
    }

    if (isset($_POST["ubah"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        if (empty($_POST["password"])) {
            $password = $rowEdit["password"];
        }else{
            $password = sha1($_POST["password"]);
        }

        $queryUpdate = mysqli_query($config, "UPDATE users SET name='$name', email='$email', password='$password' WHERE id='$id_user'");
        if ($queryUpdate) {
            header("location:user.php?ubah=berhasil");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <div class="wrapper">
        <?php include "inc/header.php"; ?>
        <div class="content mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header" align="center">
                                <h3><?php echo $header; ?> User</h3>
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="mb-3 row">
                                        <div class="col-sm-2">
                                            <label for="">Nama *</label>
                                            
                                        </div>
                                        <div class="col-sm-10">
                                            <input required type="text" name="name" class="form-control" placeholder="Masukkan Nama Anda" value="<?php echo $nilaiName; ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-sm-2">
                                            <label for="">Email *</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input required type="email" name="email" class="form-control" placeholder="Masukkan Email Anda" value="<?php echo $nilaiEmail; ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-sm-2">
                                            <label for="">Password <?php echo isset($_GET["edit"]) ? "" : "*"; ?></label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input <?php echo isset($_GET["edit"]) ? "" : "required"; ?> type="password" name="password" class="form-control" placeholder="Masukkan Password Anda">
                                        </div>
                                    </div>
                                    <div class="mb-3 row" align="center">
                                        <div class="col-sm-12">
                                            <button name="<?php echo $tombol; ?>" type="submit" class="btn btn-primary"><?php echo $tombol; ?></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
</body>
</html>