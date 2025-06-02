<?php 
    if (isset($_POST["simpan"])) {
        $title = $_POST["title"];
        $year = $_POST["year"];
        $description = $_POST["description"];

        $query = mysqli_query($config, "INSERT INTO experience(title, year, description) VALUES('$title', '$year', '$description')");
        if ($query) {
            header("location:?page=experiences&tambah=berhasil");
        }
    }

    $header = isset($_GET["edit"]) ? "Edit" : "Tambah";
    $tombol = isset($_GET["edit"]) ? "ubah" : "simpan";
    $id_user = isset($_GET["edit"]) ? $_GET["edit"] : "";
    $queryEdit = mysqli_query($config, "SELECT * FROM experience WHERE id='$id_user'");
    $rowEdit = mysqli_fetch_assoc($queryEdit);

    if (isset($_GET["edit"])) {
        $nilaiTitle = $rowEdit["title"];
        $nilaiYear = $rowEdit["year"];
        $nilaiDescription = $rowEdit["description"];
    } else {
        $nilaiTitle = "";
        $nilaiYear = "";
        $nilaiDescription = "";
    }

    if (isset($_POST["ubah"])) {
        $title = $_POST["title"];
        $year = $_POST["year"];
        $description = $_POST["description"];

        $queryUpdate = mysqli_query($config, "UPDATE experience SET title='$title', year='$year', description='$description' WHERE id='$id_user'");
        if ($queryUpdate) {
            header("location:?page=experiences&ubah=berhasil");
        }
    }
?>

<form action="" method="post">
    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="">Jabatan <span class="text-danger">*</span></label>
        </div>
        <div class="col-sm-10">
            <input required type="text" name="title" class="form-control" placeholder="Masukkan Jabatan Anda" value="<?php echo $nilaiTitle; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="">Rentang tahun <span class="text-danger">*</span></label>
        </div>
        <div class="col-sm-10">
            <input required type="text" name="year" class="form-control" placeholder="Masukkan tahun masuk - tahun keluar" value="<?php echo $nilaiYear; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="">Deskripsi <span class="text-danger">*</span></label>
        </div>
        <div class="col-sm-10">
            <textarea required id="summernote" name="description" class="form-control" cols="30" rows="10"><?php echo $nilaiDescription; ?></textarea>
        </div>
    </div>
    <div class="mb-3 row" align="center">
        <div class="col-sm-12">
            <button name="<?php echo $tombol; ?>" type="submit" class="btn btn-primary"><?php echo $tombol; ?></button>
        </div>
    </div>
</form>