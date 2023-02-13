<?php


session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}


require "functions.php";

// pagination
// konfigurasi

$jumlahDataPerhalaman = 2;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
// cara lebih flexibel
$halamanAktif = (isset($_GET['halaman']) ? $_GET['halaman'] : 1);
// halaman 2 : awal data 3 - perhitungan dari index 0
// yang berarti
// mtk sederhana
$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;




// cara berlibet
// if(isset($_GET["halaman"])){
//     $halamanAktif = $_GET["halaman"];
// } else {
//     $halamanAktif = 1;
// }

// var_dump($halamanAktif);

// floor membulatkan ke bawah
// ceil membulatkan ke atas


// var_dump($jumlahHalaman);

//  count = mengembalikan jumlah elemen dalam sebuah array.


$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerhalaman");

// tombol cari di tekan

if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/script.js"></script>
    <style>
        .load {
            width: 100px;
            position: absolute;
            top: 115px;
            z-index: -1;
            left: 280px;
            display: none;
        }
    </style>
    <title>Halaman Admin</title>
</head>

<body>

    <a href="logout.php">Logout</a>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambahan Data Mahasiswa</a>
    <br></br>


    <form action="" method="post">
        <input type="text" name="keyword" size="40px" autofocus placeholder="Masukkan keyword pencarian" autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari</button>
        <img src="img/load.gif" class="load">
    </form>
    <br>
    <br>

    <!-- navigasi -->

    <?php if ($halamanAktif > 1) : ?>
        <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
        <?php if ($i == $halamanAktif) : ?>
            <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>


    <?php if ($halamanAktif < $jumlahHalaman) : ?>
        <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
    <?php endif; ?>

    <br>
    <div id="container">
        <table border="1" cellpadding="10" cellspacing="0">
            <?php $i = $awalData + 1; ?>
            <?php foreach ($mahasiswa as $row) : ?>
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
    </div>
    <td>
        <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>
        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
    </td>
    <td><img src="img/<?= $row["gambar"]; ?>"></td>
    <td><?= $row["nrp"]; ?></td>
    <td><?= $row["nama"]; ?></td>
    <td><?= $row["email"]; ?></td>
    <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
<?php endforeach; ?>
</table>
</div>
<!-- <script src="js/jquery-3.6.1.min.js"></script>
<script src="js/script.js"></script> -->
</body>

</html>