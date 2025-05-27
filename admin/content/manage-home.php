<?php 
    include "config/koneksi.php";

    if (isset($_POST["simpan"])) {
        $photo = $_FILES["photo"]["name"];
        $tmp_name = $_FILES["photo"]["tmp_name"];
        $filename = uniqid() . "_" . basename($photo);
        $filepath = "uploads/" . $filename;
        $name = $_POST["name"];
        $description = $_POST["description"];

        $queryProfile = mysqli_query($config, "SELECT * FROM home ORDER BY id DESC");
        
        if (mysqli_num_rows($queryProfile) > 0) {
            $rowProfile = mysqli_fetch_assoc($queryProfile);
            $id = $rowProfile["id"];

            // Check if photo is uploaded
            if (!empty($photo)) {
                // If photo is uploaded, move it to the uploads directory
                unlink("uploads/" . $rowProfile["photo"]);
                move_uploaded_file($tmp_name, $filepath);

                $update = mysqli_query($config, "UPDATE home SET 
                name='$name',
                description='$description',
                photo='$filename' WHERE id='$id'");
                header("location:?page=manage-home&ubah=berhasil");
            } else {
                // If no photo is uploaded, keep the existing photo              
                $photo = $rowProfile["photo"];
                $update = mysqli_query($config, "UPDATE home SET 
                name='$name',
                description='$description' WHERE id='$id'");
                header("location:?page=manage-home&ubah=berhasil");
            }

        }else{
            if (!empty($photo)) {
                move_uploaded_file($tmp_name, $filepath);
                $insertQ = mysqli_query($config, "INSERT INTO home (name, description, photo) VALUES 
                ('$name', '$description', '$filename')");
            
                if ($insertQ) {
                    header("location:?page=manage-home&tambah=berhasil");
                }
            }else {
                move_uploaded_file($tmp_name, $filepath);
                $insertQ = mysqli_query($config, "INSERT INTO home (name, description, photo) VALUES 
                ('$name', '$description', '$filename')");
            
                if ($insertQ) {
                    header("location:?page=manage-home&tambah=berhasil");
                }
            }
        }

        // if ($photo["error"] == 0) {
            
        // }

        // $insertQ = mysqli_query($config, "INSERT INTO profiles (profile_name, profesion, description, photo) VALUES ('$profile_name', '$profesion', '$description', '$filename')");
        // if ($insertQ) {
        //     header("location:dashboard.php?page=manage-profile");
        // }
    }


    $selectProfile = mysqli_query($config, "SELECT * FROM home");
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

<form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="name" value="<?php echo isset($rowProfile["name"]) ? $rowProfile["name"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Deskripsi</label>
        <textarea id="summernote" name="description" class="form-control" cols="30" rows="10"><?php echo isset($rowProfile["description"]) ? $rowProfile["description"] : "" ?></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Photo</label>
        <input type="file" class="form-control" name="photo" value="">
        <img src="uploads/<?php echo isset($rowProfile["photo"]) ? $rowProfile["photo"] : "" ?>" alt="" width="200">
    </div>
    <div class="mb-3">
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </div>
</form>