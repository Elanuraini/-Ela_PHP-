<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari ditekan
// if( isset($_POST["cari"]) ) {
//     $mahasiswa = cari($_POST["keyword"]);
// }

if ( isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST['keyword']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=de vice-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>

        <h2>Daftar Mahasiswa</h2>

        <a href="tambah.php">Tambah Data Mahasiswa</a>
        <br><br>

        <form action="" method="post">

        <input type="text" name="keyword" size="40" autofocus placeholder="masukan keyword pencarian..." autocomplate="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari!</button>

        </form>


    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>nrp</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> 
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin untuk dihapus?');">hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>" width="50" alt=""></td>
                <td><?= $row["nrp"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>

            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>


</body>

</html>