<?php
    include "config/koneksi.php";
    $query = mysqli_query($config, "SELECT * FROM users ORDER BY id DESC");
    $row = mysqli_fetch_all($query, MYSQLI_ASSOC);

    if (isset($_GET["delete"])) {
        $id = $_GET["delete"];
        $query = mysqli_query($config, "DELETE FROM users WHERE id='$id'");
        header("location:user.php?hapus=berhasil");
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
        <?php include "inc/header.php" ?>
        <div class="content mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header" align="center">
                                <h3>Data User</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div class="d-flex justify-content-end mb-3">
                                        <a href="tambah-user.php" class="btn btn-primary">+</a>
                                    </div>
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- <?php $i = 1; ?> -->
                                            <?php foreach ($row as $key => $data):?>     
                                                <tr>
                                                    <td><?php echo $key + 1; ?></td>
                                                    <td><?php echo $data["name"]; ?></td>
                                                    <td><?php echo $data["email"]; ?></td>
                                                    <td>
                                                        <a href="tambah-user.php?edit=<?php echo $data["id"]; ?>" class="btn btn-success btn-sm">Edit</a>
                                                        <a onclick="return confirm('Are you sure?')" href="user.php?delete=<?php echo $data["id"]; ?>" class="btn btn-danger btn-sm">Delete</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
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