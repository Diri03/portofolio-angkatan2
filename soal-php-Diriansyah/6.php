<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        <div style="margin-bottom: 20px;">
            <label for="">Uang Sendiri</label>
            <input type="number" name="me">
        </div>
        <div style="margin-bottom: 20px;">
            <label for="">Uang Temen</label>
            <input type="number" name="yu">
        </div>
        <div style="margin-bottom: 20px;">
            <button name="proses" type="submit">Proses</button>
        </div>
    </form>
</body>
</html>

<?php
    if (isset($_POST["proses"])) {
        $me = $_POST["me"];
        $yu = $_POST["yu"];
        $jumlah = $me + $yu;
        echo "Uang Sendiri: $me<br>Uang Temen: $yu<br>Jumlah: $jumlah";
        // echo $namaDepan . $namaTengah . $namaBelakang;
    }
?>