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
            <label for="">Nama Depan</label>
            <input type="text" name="depan">
        </div>
        <div style="margin-bottom: 20px;">
            <label for="">Nama Tengah</label>
            <input type="text" name="tengah">
        </div>
        <div style="margin-bottom: 20px;">
            <label for="">Nama Belakang</label>
            <input type="text" name="belakang">
        </div>
        <div style="margin-bottom: 20px;">
            <button name="proses" type="submit">Proses</button>
        </div>
    </form>
</body>
</html>

<?php
    if (isset($_POST["proses"])) {
        $depan = $_POST["depan"];
        $tengah = $_POST["tengah"];
        $belakang = $_POST["belakang"];
        
        echo "$depan $tengah $belakang";
    }
?>