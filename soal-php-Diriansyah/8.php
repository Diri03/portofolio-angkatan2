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
            <label for="">kilometer</label>
            <input type="number" name="kilo">
        </div>
        <div style="margin-bottom: 20px;">
            <button name="proses" type="submit">Proses</button>
        </div>
    </form>
</body>
</html>

<?php
    if (isset($_POST["proses"])) {
        $kilo = $_POST["kilo"];
        $konversi_km_ke_miles = 0.621371;
        $miles = $kilo * $konversi_km_ke_miles;
        echo "Hasil konversi kilometer ke miles: $miles";
    }
?>