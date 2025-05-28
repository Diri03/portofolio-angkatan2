<?php 
    if (isset($_POST["simpan"])) {
        $logo = $_POST["logo"];
        $title = $_POST["title"];
        $content = $_POST["content"];

        $query = mysqli_query($config, "INSERT INTO services(icon, title, content) VALUES('$logo', '$title', '$content')");
        if ($query) {
            header("location:?page=service&tambah=berhasil");
        }
    }

    $tombol = isset($_GET["edit"]) ? "ubah" : "simpan";
    $id_user = isset($_GET["edit"]) ? $_GET["edit"] : "";
    $queryEdit = mysqli_query($config, "SELECT * FROM services WHERE id='$id_user'");
    $rowEdit = mysqli_fetch_assoc($queryEdit);

    if (isset($_GET["edit"])) {
        $nilaiLogo = $rowEdit["icon"];
        $nilaiTitle = $rowEdit["title"];
        $nilaiContent = $rowEdit["content"];
    } else {
        $nilaiLogo = "";
        $nilaiTitle = "";
        $nilaiContent = "";
    }

    if (isset($_POST["ubah"])) {
        $logo = $_POST["logo"];
        $title = $_POST["title"];
        $content = $_POST["content"];

        $queryUpdate = mysqli_query($config, "UPDATE services SET icon='$logo', title='$title', content='$content' WHERE id='$id_user'");
        if ($queryUpdate) {
            header("location:?page=service&ubah=berhasil");
        }
    }
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="">Logo *</label>
            
        </div>
        <div class="col-sm-10">
            <input required type="text" name="logo" class="form-control" placeholder="Masukkan Iconnya" value="<?php echo $nilaiLogo; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="">Judul *</label>
            
        </div>
        <div class="col-sm-10">
            <input required type="text" name="title" class="form-control" placeholder="Masukkan Judulnya" value="<?php echo $nilaiTitle; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="">Konten *</label>
        </div>
        <div class="col-sm-10">
            <textarea class="form-control" name="content" id="" cols="30" rows="10"><?php echo $nilaiContent; ?></textarea>
        </div>
    </div>
    <div class="mb-3 row" align="center">
        <div class="col-sm-12">
            <button name="<?php echo $tombol; ?>" type="submit" class="btn btn-primary"><?php echo $tombol; ?></button>
        </div>
    </div>
</form>