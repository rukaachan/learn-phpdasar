<?php
require "functions.php";
$mahasiswa = query ("SELECT * FROM MAHASISWA");
// ambil data (fecth) mahasisw dari object result
// terdapat 4 cara untuk mengambil data
// mysqli_fetch_row() // mengembalikan array menjadi numerik
// mysqli_fetch_assoc() // mengembalikkan array mejadi assoc
// mysqli_fetch_array() // mengembalikkan kedua nya
// mysqli_fetch_object()

// mysqli_fetch_row()

// $mhs = mysqli_fetch_row($result);
// echo $mhs[3];
// kenapa saya ketik 3?
// karena mysqli_fetch_row mengembalikkan 
// nilai index dari 0

// echo "<br>";

// mysqli_fetch_assoc()

// $assoc = mysqli_fetch_assoc($result);
// echo $assoc["jurusan"];
// bukan membaca dengan indeks
// dengan string

// echo "<br>";

// mysqli_fetch_array()

// $arr = mysqli_fetch_array($result);
// echo $arr["gambar"];
// echo $arr[4];
// lebih fleksibal, bisa run dengan index dan string
// kekurangan nya, bila di run untuk echo semua
// akan munculin yang index dan string

// echo "<br>";

// mysqli_fetch_object()

// $obj = mysqli_fetch_object($result);
// echo $obj->nama;

// pembelajaran menggunakan mysqli_fetch_assoc

// while ($lop = mysqli_fetch_assoc($result)) {
//     var_dump($lop["nama"]);
// }

// output, akan keluar data yang berada di nama, bukan satu tp semua


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <?php $i = 1; ?>
        <?php foreach ( $mahasiswa as $row ) : ?>
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>NRP</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="">ubah</a> |
                    <a href="">hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>"></td>
                <td><?= $row["nrp"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
            <?php $i++; ?>
            <!-- <?php $associ++ ?> -->
            <?php endforeach ; ?>
    </table>
</body>
</html>