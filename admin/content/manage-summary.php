<?php 
    include "config/koneksi.php";

    if (isset($_POST["simpan"])) {
        $name = $_POST["name"];
        $description = $_POST["description"];

        $queryProfile = mysqli_query($config, "SELECT * FROM summary ORDER BY id DESC");
        
        if (mysqli_num_rows($queryProfile) > 0) {
            $rowProfile = mysqli_fetch_assoc($queryProfile);
            $id = $rowProfile["id"];
            $update = mysqli_query($config, "UPDATE summary SET 
            name='$name',
            description='$description' WHERE id='$id'");
            header("location:?page=manage-summary&ubah=berhasil");

        }else{
            $insertQ = mysqli_query($config, "INSERT INTO summary (name, description) VALUES ('$name', '$description')");           
            if ($insertQ) {
                header("location:?page=manage-summary&tambah=berhasil");
            }
        }

        // if ($photo["error"] == 0) {
            
        // }

        // $insertQ = mysqli_query($config, "INSERT INTO profiles (profile_name, profesion, description, photo) VALUES ('$profile_name', '$profesion', '$description', '$filename')");
        // if ($insertQ) {
        //     header("location:dashboard.php?page=manage-profile");
        // }
    }


    $selectProfile = mysqli_query($config, "SELECT * FROM summary");
    $rowProfile = mysqli_fetch_assoc($selectProfile);
    // if (isset($_GET["del"])) {
    //     $isDel = $_GET["del"];
    //     $selectPhoto = mysqli_query($config, "SELECT * FROM profiles WHERE id=$isDel");
    //     $rowPhoto = mysqli_fetch_assoc($selectPhoto);
    //     unlink("uploads/" . $rowPhoto["photo"]);
    //     $delete = mysqli_query($config, "DELETE FROM profiles WHERE id=$isDel");
    //     if ($delete) {
    //         header("location:dashboard.php?page=manage-profile");
    //     }

    // }

    // $selectProfile = mysqli_query($config, "SELECT * FROM profiles");
    // $row = mysqli_fetch_assoc($selectProfile);
?>

<form action="" method="post">
    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="name" value="<?php echo isset($rowProfile["name"]) ? $rowProfile["name"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Deskripsi</label>
        <textarea id="summernote" name="description" class="form-control" cols="30" rows="10"><?php echo isset($rowProfile["description"]) ? $rowProfile["description"] : "" ?></textarea>
    </div>
    <div class="mb-3">
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </div>
</form>