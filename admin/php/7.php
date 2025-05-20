<?php 

    function solusi($nilai){
        if ($nilai >= 0 && $nilai < 60) {
            $grade = "E";
            $status = "Tidak Lulus";
        }elseif ($nilai >= 60 && $nilai < 70) {
            $grade = "D";
            $status = "Tidak Lulus";
        }elseif ($nilai == 70) {
            $grade = "C";
            $status = "Tidak Lulus";
        }elseif ($nilai > 70 && $nilai < 80){
            $grade = "C";
            $status = "Lulus";
        }elseif ($nilai >= 80 && $nilai < 90){
            $grade = "B";
            $status = "Lulus";
        }elseif ($nilai >= 90 && $nilai <= 100){
            $grade = "A";
            $status = "Lulus";
        }else{
            $grade = "Tidak Valid";
            $status = "Tidak Valid";
        }
        $data = [$grade, $status];
        return $data;

    }

    // $nilai = 1000;
    // $a = solusi($nilai);

    // echo "Nama Peserta : Diriansyah<br>";
    // echo "Nilai : {$nilai} <br>";
    // echo "Grade : {$a[0]}<br>";
    // echo "Status : {$a[1]}<br>";
    // echo "<br>";

    // variabel sistem: variabel yang dibuat oleh php
    // $_POST ,$_GET, $_SESSION, $_FILES, $_REQUEST
    if (isset($_GET["nama"])){
        $nama = $_GET["nama"];
        $nilai = $_GET["nilai"];
        if (isset($_GET["nilai"])) {
            $a = solusi($nilai);
        }
        echo "Nama Peserta : {$nama} <br>";
        echo "Nilai : {$nilai} <br>";
        echo "Grade : {$a[0]}<br>";
        echo "Status : {$a[1]}<br>";
        echo "<br>";
    }

    // $nama = isset($_POST["nama"]) ? $_POST["nama"] : '';
    // echo "Selamat siang $nama";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable System | Superglobal var</title>
</head>
<body>
    <form action="" method="get">
        <div class="form-group">
            <label for="">Nama: </label>
            <input type="text" name="nama" id="" placeholder="Masukkan Nama Anda">
        </div>
        <br>
        <div class="form-group">
            <label for="">Nilai: </label>
            <input type="number" name="nilai" id="" placeholder="Masukkan Nilai Anda">
        </div>
        <div class="form-group">
            <button type="submit">Kirim</button>
        </div>
    </form>
</body>
</html>