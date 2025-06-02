<?php 
    if (isset($_POST["simpan"])) {
        $skill = $_POST["skill"];
        $bar = $_POST["bar"];

        $query = mysqli_query($config, "INSERT INTO kemampuan(skill, bar) VALUES('$skill', '$bar')");
        if ($query) {
            header("location:?page=skills&tambah=berhasil");
        }
    }

    $header = isset($_GET["edit"]) ? "Edit" : "Tambah";
    $tombol = isset($_GET["edit"]) ? "ubah" : "simpan";
    $id_user = isset($_GET["edit"]) ? $_GET["edit"] : "";
    $queryEdit = mysqli_query($config, "SELECT * FROM kemampuan WHERE id='$id_user'");
    $rowEdit = mysqli_fetch_assoc($queryEdit);

    if (isset($_GET["edit"])) {
        $nilaiSkill = $rowEdit["skill"];
        $nilaiBar = $rowEdit["bar"];
    } else {
        $nilaiSkill = "";
        $nilaiBar = "";
    }

    if (isset($_POST["ubah"])) {
        $skill = $_POST["skill"];
        $bar = $_POST["bar"];

        $queryUpdate = mysqli_query($config, "UPDATE kemampuan SET skill='$skill', bar='$bar' WHERE id='$id_user'");
        if ($queryUpdate) {
            header("location:?page=skills&ubah=berhasil");
        }
    }
?>

<form action="" method="post">
    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="">Skill <span class="text-danger">*</span></label>
        </div>
        <div class="col-sm-10">
            <input required type="text" name="skill" class="form-control" placeholder="Masukkan Skill Anda" value="<?php echo $nilaiSkill; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="">Rating <span class="text-danger">*</span></label>
        </div>
        <div class="col-sm-10">
            <input required type="number" name="bar" min="0" max="100" class="form-control" placeholder="Masukkan Rating Anda" value="<?php echo $nilaiBar; ?>">
        </div>
    </div>
    <div class="mb-3 row" align="center">
        <div class="col-sm-12">
            <button name="<?php echo $tombol; ?>" type="submit" class="btn btn-primary"><?php echo $tombol; ?></button>
        </div>
    </div>
</form>