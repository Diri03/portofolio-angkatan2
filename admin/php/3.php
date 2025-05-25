<?php 

$siswa = [
    [
        "nama" => "Alley",
        "umur" => 24,
        "jurusan" => "Teknik Informatika",
        "status" => 1
    ],
    [
        "nama" => "Dika",
        "umur" => 25,
        "jurusan" => "Sistem Informasi",
        "status" => 1
    ],
    [
        "nama" => "Dimas",
        "umur" => 26,
        "jurusan" => "Teknik Komputer",
        "status" => 0
    ]
];

function ubahStatus($status){
    switch ($status) {
        case '1':
            return "Aktif";
        
        default:
            return "Tidak Aktif";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
</head>
<body>
    <h1 align="center">Data Siswa</h1>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Jurusan</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($siswa as $key => $sw){ ?>
            <tr align="center">
                <td><?php echo $sw["nama"]; ?></td>
                <td><?php echo $sw["umur"]; ?></td>
                <td><?php echo $sw["jurusan"]; ?></td>
                <td><?php echo ubahStatus($sw["status"]); ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>