<?php 

    //if else
    // isset = tidak kosong
    // empety = kosong
    $nama = "Bambang";
    if($nama == "Bambang"){
        echo "Nama saya Bambang Pamungkas";
    }else{
        echo "Nama saya bukan Bambang";
    }

    echo "<br><br>";

    if (empty($nama)) {
        echo "Nama saya kosong";
    }else{
        echo "Nama saya $nama Pamungkas";
    }

    echo "<br><br>";

    if (isset($nama)) {
        echo "Nama saya $nama Pamungkas";
    }else{
        echo "Nama saya kosong";
    }

    echo "<br><br>";

    $suhu = 40;
    if ($suhu < 35) {
        echo "Suhu Dingin";
    }elseif ($suhu === 35) {
        echo "Suhu Normal";
    }else{
        echo "Suhu Panas";
    }

    echo "<br><br>";

    $username = "admin";
    $password = "admin123";

    if ($username == "admin" or $password == "admin") {
        echo "Login berhasil<br>";
    }else{
        echo "Login gagal<br>";
    }
?>