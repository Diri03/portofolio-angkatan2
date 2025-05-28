<?php 
    if (isset($_POST["simpan"])) {
        $photo = $_FILES["photo"]["name"];
        $tmp_name = $_FILES["photo"]["tmp_name"];
        $filename = uniqid() . "_" . basename($photo);
        $filepath = "uploads/" . $filename;
        unlink("uploads/" . $filename);
        move_uploaded_file($tmp_name, $filepath);

        $ekstensi = ["png", "jpg", "jpeg"];
        $eks = pathinfo($photo, PATHINFO_EXTENSION);
        if (!in_array($eks, $ekstensi)) {
            $error[] = "Mohon maaf, ekstensi file tidak ditemukan";
        }else{
            $query = mysqli_query($config, "INSERT INTO picture_project(photo) VALUES('$filename')");
            if ($query) {
                header("location:?page=picture_project&tambah=berhasil");
            }
        }
    }

    $tombol = isset($_GET["edit"]) ? "ubah" : "simpan";
    $id_user = isset($_GET["edit"]) ? $_GET["edit"] : "";
    $queryEdit = mysqli_query($config, "SELECT * FROM picture_project WHERE id='$id_user'");
    $rowEdit = mysqli_fetch_assoc($queryEdit);

    if (isset($_POST["ubah"])) {
        $photo = $_FILES["photo"]["name"];
        $tmp_name = $_FILES["photo"]["tmp_name"];
        $filename = uniqid() . "_" . basename($photo);
        $filepath = "uploads/" . $filename;
        unlink("uploads/" . $filename);
        move_uploaded_file($tmp_name, $filepath);
        $queryUpdate = mysqli_query($config, "UPDATE picture_project SET photo='$filename' WHERE id='$id_user'");
        if ($queryUpdate) {
            header("location:?page=picture_project&ubah=berhasil");
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
    <div class="mb-3 row" align="center">
        <div class="col-sm-12">
            <button name="<?php echo $tombol; ?>" type="submit" class="btn btn-primary"><?php echo ucwords($tombol); ?></button>
        </div>
    </div>
</form>