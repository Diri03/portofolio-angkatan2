<?php 
    if (isset($_POST["simpan"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = sha1($_POST["password"]);

        $quote = $_POST["quote"];
        $profesi = $_POST["profesion"];
        $rating = $_POST["rating"];
        $quote = $_POST["quote"];
        $photo = $_FILES["photo"]["name"];
        $size = $_FILES["photo"]["size"];

        $ekstensi = ["png", "jpg", "jpeg"];
        $eks = pathinfo($photo, PATHINFO_EXTENSION);
        if (!in_array($eks, $ekstensi)) {
            $error[] = "Mohon maaf, ekstensi file tidak ditemukan";
        }else{
            $query = mysqli_query($config, "INSERT INTO testimoni(photo, name, profesion, rating, quote) VALUES('$photo', '$name', '$profesi', '$rating', '$quote')");
            if ($query) {
                header("location:?page=testimonials&tambah=berhasil");
            }
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

<form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="">Photo</label>
        </div>
        <div class="col-sm-10">
            <input type="file" name="photo">
        </div>
    </div>
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
            <label for="">Jabatan *</label>
        </div>
        <div class="col-sm-10">
            <input required type="text" name="profesion" class="form-control" placeholder="Masukkan Jabatan Anda" value="<?php echo $nilaiEmail; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="">Rating <?php echo isset($_GET["edit"]) ? "" : "*"; ?></label>
        </div>
        <div class="col-sm-10">
            <input <?php echo isset($_GET["edit"]) ? "" : "required"; ?> type="number" name="rating" class="form-control" placeholder="Masukkan Rating Anda">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="">Quote</label>
        </div>
        <div class="col-sm-10">
            <textarea name="quote" cols="30" rows="10" class="form-control"></textarea>
        </div>
    </div>
    <div class="mb-3 row" align="center">
        <div class="col-sm-12">
            <button name="<?php echo $tombol; ?>" type="submit" class="btn btn-primary"><?php echo $tombol; ?></button>
        </div>
    </div>
</form>