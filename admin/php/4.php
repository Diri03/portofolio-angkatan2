<?php 
    // function
    function callName(){
        echo "Nama saya Diri<br>";
    }
    callName();

    function callName2($name){
        return "Nama saya $name<br>";
    }
    echo callName2("Yansyah");

    function perkalian($angka1, $angka2){
        return $angka1 * $angka2;
    }
    echo perkalian(2, 3);
    echo "<br>";


?>