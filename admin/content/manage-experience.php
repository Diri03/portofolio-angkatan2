<?php 
    include "config/koneksi.php";

    if (isset($_POST["simpan"])) {
        $title = $_POST["title"];
        $year = $_POST["year"];
        $description = $_POST["description"];

        $queryProfile = mysqli_query($config, "SELECT * FROM experience ORDER BY id DESC");
        
        if (mysqli_num_rows($queryProfile) > 0) {
            $rowProfile = mysqli_fetch_assoc($queryProfile);
            $id = $rowProfile["id"];
            $update = mysqli_query($config, "UPDATE experience SET 
            title='$title',
            year='$year',
            description='$description' WHERE id='$id'");
            header("location:?page=manage-experience&ubah=berhasil");

        }else{
            $insertQ = mysqli_query($config, "INSERT INTO experience (title, year, description) VALUES ('$title', '$year', '$description')");           
            if ($insertQ) {
                header("location:?page=manage-experience&tambah=berhasil");
            }
        }

        // if ($photo["error"] == 0) {
            
        // }

        // $insertQ = mysqli_query($config, "INSERT INTO profiles (profile_name, profesion, description, photo) VALUES ('$profile_name', '$profesion', '$description', '$filename')");
        // if ($insertQ) {
        //     header("location:dashboard.php?page=manage-profile");
        // }
    }


    $selectProfile = mysqli_query($config, "SELECT * FROM experience");
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
        <label class="form-label">Judul</label>
        <input type="text" class="form-control" name="title" value="<?php echo isset($rowProfile["title"]) ? $rowProfile["title"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Rentang Tahun</label>
        <input type="text" class="form-control" name="year" value="<?php echo isset($rowProfile["year"]) ? $rowProfile["year"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Deskripsi</label>
        <textarea id="summernote" name="description" class="form-control" cols="30" rows="10"><?php echo isset($rowProfile["description"]) ? $rowProfile["description"] : "" ?></textarea>
    </div>
    <div class="mb-3">
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </div>
</form>