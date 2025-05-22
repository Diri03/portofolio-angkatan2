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
            <label for="">Angka</label>
            <input type="number" name="angka">
        </div>
        <div style="margin-bottom: 20px;">
            <button name="proses" type="submit">Proses</button>
        </div>
    </form>
</body>
</html>

<?php
    if (isset($_POST["proses"])) {
        $angka = (int)$_POST["angka"];
        if ($angka > 0) {
            echo "angka positif";
        }elseif($angka === 0){
            echo "nol";
        }else{
            echo "angka negatif";
        }
    }
?>