<?php
// $_GET
$mahasiswa = [
    [
        "nama" => "Nino Cocy",
        "nomor" => "036",
        "email" => "seokjin@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "chimmy.png"
    ],
    [
        "nama" => "Na Jeamin",
        "nomor" => "885",
        "email" => "jungkook@gmail.com",
        "jurusan" => "Teknik Mesin",
        "gambar" => "dino2.jpeg"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan1.php?nama=<?= $mhs["nama"]; ?>&nomor=<?= $mhs["nomor"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>