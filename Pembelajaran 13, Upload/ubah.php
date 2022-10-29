<?php
require "functions.php";

// ambil data di url 
$id = $_GET["id"];

// query data mahasiswa berdasarkan id

$mhs = query("SELECT*FROM MAHASISWA WHERE id = $id")[0];

// harus konek ke database terlebih dahulu

$conn = mysqli_connect("localhost", "root", "", "phpdasar");
// mengecek apakah tombol submit sudah di tekan atau belum

if (isset($_POST["submit"])) {



    // cek apakah data berhasil atau tidak


    if (ubah($_POST) > 0) {
        echo "

        <script>
         alert('data berhasil di ubah');
         document.location.href = 'index.php';
        </script>

        ";
    } else {
        echo "
        
        <script>
         alert('data gagal di ubah');
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
    <title>Ubah Data Mahasiswa</title>
</head>
<!-- penggunaan required digunakan untuk, user mengisi form tanpa melewatkan
yang lainnya, dan  wajib di isi  -->
     
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
            <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"];?>
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"]; ?>">
            </li>
            <li>
                <label for=" email">Email : </label>
                <input type="text" name="email" id="email" required value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <img src="img/<?= $mhs["gambar"];?>"width="60px"><br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>

</html>