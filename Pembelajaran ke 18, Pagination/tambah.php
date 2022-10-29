<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
} 

require "functions.php";
// harus konek ke database terlebih dahulu

$conn = mysqli_connect("localhost", "root", "", "phpdasar");
// mengecek apakah tombol submit sudah di tekan atau belum

if (isset($_POST["submit"])) {




    // cara baru 
    // cek apakah data berhasil atau tidak


    if (tambah($_POST) > 0) {
        echo "

        <script>
         alert('data berhasil di tambahkan');
         document.location.href = 'index.php';
        </script>

        ";
    } else {
        echo "
        
        <script>
         alert('data gagal di tambahkan');
         document.location.href = 'index.php';
        </script>
        
        ";
    }
}
// cek apakah data berhasil di tambahkan atau tidak
// cara yang bisa di gunakan atau scroll bawah
// if ( mysqli_affected_rows($conn) > 0) {
//     echo "berhasil";
// } else {
//     echo "gagal";
//     echo "<br>";
//     echo mysqli_error($conn);
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<!-- penggunaan required digunakan untuk, user mengisi form tanpa melewatkan
yang lainnya, dan wajib di isi  -->
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" required>
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="file" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>

</html>