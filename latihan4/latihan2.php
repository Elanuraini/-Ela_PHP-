<?php
//$mahasiswa = [
 //   ["ela nur aini", "042330400", "rekayasa perangkat lunak","elaa.aini06@gmail.com"],
  //  ["tri dinda sari", "033040001", "teknik mesin","dinda@gmail.com"]
// ];    

// array associatife
// definisinya sama seperti array numefik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
    "nama"=>"ELA NUR AINI",
    "nrp" =>"042330400",
    "email" =>"ela.aini06@gmail.com",
    "jurusan" =>"rekayasa perangkat lunak",
    "gambar" =>"gambar.jpg",
    ],
[ 
    "nama"=>"ELA NUR AINI",
    "nrp" =>"042330400",
    "email" =>"ela.aini06@gmail.com",
    "jurusan" =>"rekayasa perangkat lunak",
    "gambar" =>"gambar.jpg",
] 
];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>  
    <h1>Daftar Mahasiswa</h1>
    
    <?php foreach ( $mahasiswa as $mhs ) : ?>
 <ul>
     <li>
         <img src="img/gambar.jpg" width="100">
    </li>
    <li> NAMA : <?= $mhs["nama"]; ?></li>
    <li> NRP : <?= $mhs["nrp"]; ?></li>
    <li> JURUSAN : <?=$mhs["email"]; ?></li>
    <li> EMAIL : <?= $mhs["jurusan"]; ?></li>
</ul> 
<?php endforeach; ?>

    
</body>
</html>