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
            <label for="">Angka1</label>
            <input type="number" name="angka1">
        </div>
        <div style="margin-bottom: 20px;">
            <label for="">Angka2</label>
            <input type="number" name="angka2">
        </div>
        <div style="margin-bottom: 20px;">
            <label for="">Angka3</label>
            <input type="number" name="angka3">
        </div>
        <div style="margin-bottom: 20px;">
            <button name="proses" type="submit">Proses</button>
        </div>
    </form>
</body>
</html>

<?php
    if (isset($_POST["proses"])) {
        $angka1 = (int)$_POST["angka1"];
        $angka2 = (int)$_POST["angka2"];
        $angka3 = (int)$_POST["angka3"];
        if ($angka1 > $angka2 && $angka1 >= $angka3) {
            echo "Input 1: $angka1";
        }elseif ($angka2 >= $angka1 && $angka2 >= $angka3){
            echo "Input 2: $angka2";
        }else{
            echo "Input 3: $angka3";
        }
    }
?>