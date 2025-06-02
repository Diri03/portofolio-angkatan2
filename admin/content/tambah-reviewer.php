<?php 
    if (isset($_POST["simpan"])) {
        $name = $_POST["name"];
        $quote = $_POST["quote"];
        $profesi = $_POST["profesion"];
        $rating = $_POST["rating"];
        $quote = $_POST["quote"];
        $photo = $_FILES["photo"]["name"];
        if (!empty($photo)) {
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
                $query = mysqli_query($config, "INSERT INTO testimoni(photo, name, profesion, rating, quote) VALUES('$filename', '$name', '$profesi', '$rating', '$quote')");
                if ($query) {
                    header("location:?page=testimonials&tambah=berhasil");
                }
            }
        }else {
            $query = mysqli_query($config, "INSERT INTO testimoni(name, profesion, rating, quote) VALUES('$name', '$profesi', '$rating', '$quote')");
            if ($query) {
                header("location:?page=testimonials&tambah=berhasil");
            }
        }
    }

    $tombol = isset($_GET["edit"]) ? "ubah" : "simpan";
    $id_user = isset($_GET["edit"]) ? $_GET["edit"] : "";
    $queryEdit = mysqli_query($config, "SELECT * FROM testimoni WHERE id='$id_user'");
    $rowEdit = mysqli_fetch_assoc($queryEdit);

    if (isset($_GET["edit"])) {
        $nilaiName = $rowEdit["name"];
        $nilaiProfesion = $rowEdit["profesion"];
        $nilaiRating = $rowEdit["rating"];
        $nilaiQuote = $rowEdit["quote"];
    } else {
        $nilaiName = "";
        $nilaiProfesion = "";
        $nilaiRating = "";
        $nilaiQuote = "";
    }

    if (isset($_POST["ubah"])) {
        $name = $_POST["name"];
        $quote = $_POST["quote"];
        $profesi = $_POST["profesion"];
        $rating = $_POST["rating"];
        $quote = $_POST["quote"];
        $photo = $_FILES["photo"]["name"];
        if (!empty($photo)) {
            $tmp_name = $_FILES["photo"]["tmp_name"];
            $filename = uniqid() . "_" . basename($photo);
            $filepath = "uploads/" . $filename;
            unlink("uploads/" . $filename);
            move_uploaded_file($tmp_name, $filepath);
            $queryUpdate = mysqli_query($config, "UPDATE testimoni SET photo='$filename', name='$name', profesion='$profesi', rating='$rating', quote='$quote' WHERE id='$id_user'");
            if ($queryUpdate) {
                header("location:?page=testimonials&ubah=berhasil");
            }
        }else {
            $queryUpdate = mysqli_query($config, "UPDATE testimoni SET name='$name', profesion='$profesi', rating='$rating', quote='$quote' WHERE id='$id_user'");
            if ($queryUpdate) {
                header("location:?page=testimonials&ubah=berhasil");
            }
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
            <?php if (isset($_GET["edit"])): ?>
                <br><br>
                <img src="uploads/<?php echo $rowEdit["photo"]; ?>" alt="" width="100">
            <?php endif; ?>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="">Nama <span class="text-danger">*</span></label>
        </div>
        <div class="col-sm-10">
            <input required type="text" name="name" class="form-control" placeholder="Masukkan Nama Anda" value="<?php echo $nilaiName; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="">Jabatan <span class="text-danger">*</span></label>
        </div>
        <div class="col-sm-10">
            <input required type="text" name="profesion" class="form-control" placeholder="Masukkan Jabatan Anda" value="<?php echo $nilaiProfesion; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="">Rating <span class="text-danger">*</span></label>
        </div>
        <div class="col-sm-10">
            <input required type="number" name="rating" min="0" max="5" class="form-control" placeholder="Masukkan Rating Anda" value="<?php echo $nilaiRating; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="">Quote <span class="text-danger">*</span></label>
        </div>
        <div class="col-sm-10">
            <textarea required id="summernote" name="quote" cols="30" rows="10" class="form-control"><?php echo $nilaiQuote; ?></textarea>
        </div>
    </div>
    <div class="mb-3 row" align="center">
        <div class="col-sm-12">
            <button name="<?php echo $tombol; ?>" type="submit" class="btn btn-primary"><?php echo ucwords($tombol); ?></button>
        </div>
    </div>
</form>