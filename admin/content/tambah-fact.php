<?php 
    if (isset($_POST["simpan"])) {
        $name = $_POST["name"];
        $count = $_POST["count"];

        $query = mysqli_query($config, "INSERT INTO fakta(name, count) VALUES('$name', '$count')");
        if ($query) {
            header("location:?page=fact&tambah=berhasil");
        }
    }

    $tombol = isset($_GET["edit"]) ? "ubah" : "simpan";
    $id_user = isset($_GET["edit"]) ? $_GET["edit"] : "";
    $queryEdit = mysqli_query($config, "SELECT * FROM fakta WHERE id='$id_user'");
    $rowEdit = mysqli_fetch_assoc($queryEdit);

    if (isset($_GET["edit"])) {
        $nilaiName = $rowEdit["name"];
        $nilaiCount = $rowEdit["count"];
    } else {
        $nilaiName = "";
        $nilaiCount = "";
    }

    if (isset($_POST["ubah"])) {
        $name = $_POST["name"];
        $count = $_POST["count"];

        $queryUpdate = mysqli_query($config, "UPDATE fakta SET name='$name', count='$count' WHERE id='$id_user'");
        if ($queryUpdate) {
            header("location:?page=fact&ubah=berhasil");
        }
    }
?>

<form action="" method="post">
    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="">Fakta <span class="text-danger">*</span></label>
            
        </div>
        <div class="col-sm-10">
            <input required type="text" name="name" class="form-control" placeholder="Masukkan Nilai Fakta" value="<?php echo $nilaiName; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="">Jumlah <span class="text-danger">*</span></label>
        </div>
        <div class="col-sm-10">
            <input required type="number" name="count" min="0" class="form-control" placeholder="Masukkan Jumlahnya" value="<?php echo $nilaiCount; ?>">
        </div>
    </div>
    <div class="mb-3 row" align="center">
        <div class="col-sm-12">
            <button name="<?php echo $tombol; ?>" type="submit" class="btn btn-primary"><?php echo ucwords($tombol); ?></button>
        </div>
    </div>
</form>