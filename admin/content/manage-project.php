<?php 
    include "config/koneksi.php";

    if (isset($_POST["simpan"])) {
        $category = $_POST["category"];
        $client = $_POST["client"];
        $date = $_POST["date"];
        $url = $_POST["url"];
        $title = $_POST["title"];
        $description = $_POST["description"];

        $queryProfile = mysqli_query($config, "SELECT * FROM project ORDER BY id DESC");
        
        if (mysqli_num_rows($queryProfile) > 0) {
            $rowProfile = mysqli_fetch_assoc($queryProfile);
            $id = $rowProfile["id"];
            $update = mysqli_query($config, "UPDATE project SET 
            category='$category',
            client='$client',
            date='$date',
            url='$url',
            title='$title',
            description='$description' WHERE id='$id'");
            header("location:?page=manage-project&ubah=berhasil");

        }else{
            $insertQ = mysqli_query($config, "INSERT INTO project (category, client, date, url, title, description) VALUES ('$category', '$client', '$date', '$url', '$title', '$description')");           
            if ($insertQ) {
                header("location:?page=manage-project&tambah=berhasil");
            }
        }

        // if ($photo["error"] == 0) {
            
        // }

        // $insertQ = mysqli_query($config, "INSERT INTO profiles (profile_name, profesion, description, photo) VALUES ('$profile_name', '$profesion', '$description', '$filename')");
        // if ($insertQ) {
        //     header("location:dashboard.php?page=manage-profile");
        // }
    }


    $selectProfile = mysqli_query($config, "SELECT * FROM project");
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
        <label class="form-label">Kategori</label>
        <input type="text" class="form-control" name="category" value="<?php echo isset($rowProfile["category"]) ? $rowProfile["category"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Klien</label>
        <input type="text" class="form-control" name="client" value="<?php echo isset($rowProfile["client"]) ? $rowProfile["client"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Tanggal Projek</label>
        <input type="date" class="form-control" name="date" value="<?php echo isset($rowProfile["date"]) ? $rowProfile["date"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Tautan Projek</label>
        <input type="text" class="form-control" name="url" value="<?php echo isset($rowProfile["url"]) ? $rowProfile["url"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Judul Projek</label>
        <input type="text" class="form-control" name="title" value="<?php echo isset($rowProfile["title"]) ? $rowProfile["title"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Deskripsi</label>
        <textarea id="summernote" name="description" class="form-control" cols="30" rows="10"><?php echo isset($rowProfile["description"]) ? $rowProfile["description"] : "" ?></textarea>
    </div>
    <div class="mb-3">
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </div>
</form>