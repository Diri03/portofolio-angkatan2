<?php 
    // array index
    $nama = array("Diriansyah", "Dika", "Dimas");
    echo "{$nama[0]} <br>";
    echo "{$nama[1]} <br>";
    echo "{$nama[2]} <br>";
    print_r($nama);
    echo "<br><br>";

    // array 
    $buah = ["Apel", "Pisang", "Jeruk"];
    print_r($buah);
    echo "<br>";

    // loop
    echo "Nama-nama buah:<br>";
    foreach($buah as $b){
        echo "Buah {$b} <br>";
    }
    echo "<br>";

    // associative array
    $data = [
        "Nama" => "Diriansyah",
        "Umur" => 26,
        "Tinggi" => 166.6
    ];

    echo "Nama saya adalah {$data["Nama"]}, umur saya {$data["Umur"]} tahun dengan tingginya {$data["Tinggi"]} cm <br><br>";

    $siswa = [
        [
            "nama" => "Alley",
            "umur" => 24
        ],
        [
            "nama" => "Dika",
            "umur" => 25
        ],
        [
            "nama" => "Dimas",
            "umur" => 26
        ]
    ];

    print_r($siswa);
    echo "<br>";
    echo $siswa[0]["nama"] . "<br><br>";

    foreach ($siswa as $key => $sw) {
        echo "Index ke " . $key . "<br>";
        echo "Nama saya " . $sw["nama"] . "<br>";
        echo "Umur saya " . $sw["umur"] . " tahun<br><br>";
    }
?>