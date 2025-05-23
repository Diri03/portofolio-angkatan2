<?php 
    include "config/koneksi.php";

    if (isset($_POST["simpan"])) {
        $profile_name = $_POST["profile_name"];
        $profesion = $_POST["profesion"];
        $description = $_POST["description"];
        $photo = $_FILES["photo"];
        if ($photo["error"] == 0) {
            $filename = uniqid() . "_" . basename($photo["name"]);
            $filepath = "uploads/" . $filename;
            move_uploaded_file($photo["tmp_name"], $filepath);
        }

        $insertQ = mysqli_query($config, "INSERT INTO profiles (profile_name, profesion, description, photo) VALUES ('$profile_name', '$profesion', '$description', '$filename')");
        if ($insertQ) {
            header("location:dashboard.php?page=manage-profile");
        }
    }


    $selectProfile = mysqli_query($config, "SELECT * FROM profiles");
    $row = mysqli_fetch_assoc($selectProfile);
    if (isset($_GET["del"])) {
        $isDel = $_GET["del"];
        $selectPhoto = mysqli_query($config, "SELECT * FROM profiles WHERE id=$isDel");
        $rowPhoto = mysqli_fetch_assoc($selectPhoto);
        unlink("uploads/" . $rowPhoto["photo"]);
        $delete = mysqli_query($config, "DELETE FROM profiles WHERE id=$isDel");
        if ($delete) {
            header("location:dashboard.php?page=manage-profile");
        }

    }

    $selectProfile = mysqli_query($config, "SELECT * FROM profiles");
    $row = mysqli_fetch_assoc($selectProfile);
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="m-2" style="width: 55%;">
        <label class="form-label">Profile Name</label>
        <input type="text" class="form-control" name="profile_name" value="<?php echo isset($row["profile_name"]) ? $row["profile_name"] : "" ?>">

        <label class="form-label">Profesion</label>
        <input type="text" name="profesion" class="form-control" value="<?php echo isset($row["profesion"]) ? $row["profesion"] : "" ?>">

        <label class="form-label">Description</label>
        <textarea name="description" cols="30" rows="5" class="form-control"><?php echo isset($row["description"]) ? $row["description"] : "" ?></textarea>

        <label class="form-label">Photo</label>
        <input type="file" name="photo" class="form-control">
        <img src="uploads/<?php echo $row["photo"] ?>" alt="" width="150"><br>

        <?php if (empty($row["profile_name"])) { ?>
            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
        <?php }else{ ?>
            <a onclick="return confirm('Yakin Ingin Hapus?')" href="dashboard.php?page=manage-profile&del=<?php echo $row["id"] ?>" class="btn btn-danger mt-2">Hapus</a>
        <?php } ?>
        
    </div>
</form>