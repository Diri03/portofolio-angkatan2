<?php 
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
    }


    $selectProfile = mysqli_query($config, "SELECT * FROM summary");
    $rowProfile = mysqli_fetch_assoc($selectProfile);
?>

<form action="" method="post">
    <div class="mb-3">
        <label class="form-label">Nama <span class="text-danger">*</span></label>
        <input required type="text" class="form-control" name="name" value="<?php echo isset($rowProfile["name"]) ? $rowProfile["name"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Deskripsi <span class="text-danger">*</span></label>
        <textarea required id="summernote" name="description" class="form-control" cols="30" rows="10"><?php echo isset($rowProfile["description"]) ? $rowProfile["description"] : "" ?></textarea>
    </div>
    <div class="mb-3">
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </div>
</form>