<?php
$mahasiswa = [
    [
        "nama" => "Almadhan Abdurrofi",
        "nrp" => "243040076",
        "email" => "almadhan30@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Faiz Chandra",
        "nrp" => "243040055",
        "email" => "Faizzzz@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Fikry Salazar",
        "nrp" => "243040089",
        "email" => "pekryyy@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Zidan Maulana",
        "nrp" => "243040043",
        "email" => "zidnn22@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Rifky Nur Hidayat",
        "nrp" => "243040075",
        "email" => "rifkyyyy@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Azhar Rafi",
        "nrp" => "243040054",
        "email" => "ajerrr@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Yusuf Mahardika",
        "nrp" => "243040099",
        "email" => "ucupph@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Bagas Akbar",
        "nrp" => "243040091",
        "email" => "bagass@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Robi Tri",
        "nrp" => "243040022",
        "email" => "ribiazzah@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Rajendra",
        "nrp" => "243040051",
        "email" => "rajjjj@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama: <?= $mhs["nama"]; ?></li>
            <li>NRP: <?= $mhs["nrp"]; ?></li>
            <li>Email: <?= $mhs["email"]; ?></li>
            <li>Jurusan: <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>