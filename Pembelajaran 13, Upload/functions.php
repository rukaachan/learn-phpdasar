<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    // ambil data dari tiap elemen dalam form
    // htmlspeciallchars berguna untuk chars yng di input 
    // harus sesuai dengan data yang di butuhkan
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]); 

    // upload

    $gambar = upload();
    if( !$gambar){
        return false;
    }

    // query insert data
    $query = "INSERT INTO mahasiswa
        VALUES ('', '$nama', '$nrp', '$email', '$jurusan', '$gambar')";
    mysqli_query($conn, $query);

    return (mysqli_affected_rows($conn));

}

function upload() {

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang di uplaod
    if( $error === 4){
        echo "<script>
        alert('pilih gambar terlebih dahulu');
        </script>";
    return false;
    }

    // cek apakah yang di upload adalah gambar
    // dengan mengecek esktensi

    $ekstensiValid = ["jpg","jpeg","png"];
    // melakukan pemecahan string, agar bisa di proses
    $ekstensiGambar = explode(".",$namaFile); 
    // string akan di set ke lower, dan melakukan
    // pengambilan huruf $ekstensivalid 
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiValid)) {
        echo "<script>
        alert('yang anda upload bukan gambar');
        </script>";
    return false;
        
    }

    // cek jika ukuran terlalu besar
    if($ukuranFile > 1000000){
        echo "<script>
        alert('ukuran gambar terlalu besar');
        </script>";
        return false;
        
    }

    // lolos pengecekan gambar, gambar siap di upload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= ".";
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpName, "img/". $namaFile);

    return $namaFile;
}



function hapus($id) {
    global $conn; 
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data) {

    global $conn;
    $id      = $data["id"];
    $nama    = htmlspecialchars($data["nama"]);
    $nrp     = htmlspecialchars($data["nrp"]);
    $email   = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarLama =  htmlspecialchars($data["gambarLama"]);
    
    // cek apakah user pilih gambar baru atau tidak
    //     
    if($_FILES["gambar"]["error"] === 4){
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }
    // query insert data
    $query = "UPDATE mahasiswa SET
    nama    = '$nama',
    nrp     = '$nrp',
    email   = '$email',
    jurusan = '$jurusan',
    gambar  = '$gambar'
    WHERE id = $id
    ";
    mysqli_query($conn, $query);

    return (mysqli_affected_rows($conn));
}

function cari($keyword){
   $query = "SELECT* FROM mahasiswa
        WHERE
    -- penggunaan '=' tidak efektif 
    -- sebagai kolom pencarian
    -- gunakan saja LIKE
    -- artinya yang similiar atau mirip dengan yang di tuju 
    -- nama = '$keyword'

    -- nama LIKE '%$keyword%' 
    -- bila persen ya di depan, berarti mencari
    -- similiar dari depan dan sebaliknya


    nama LIKE '%$keyword%' OR
    nrp LIKE '%$keyword%' OR
    email LIKE '%$keyword%' OR
    jurusan LIKE '%$keyword%'
    ";

    return query($query);
}

?>