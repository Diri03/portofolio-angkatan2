<?php 
    if (isset($_POST["simpan"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = sha1($_POST["password"]);

        $query = mysqli_query($config, "INSERT INTO users(name, email, password) VALUES('$name', '$email', '$password')");
        if ($query) {
            header("location:?page=user&tambah=berhasil");
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
            header("location:?page=user&ubah=berhasil");
        }
    }
?>

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