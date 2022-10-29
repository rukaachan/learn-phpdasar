<?php 

// $mahasiswa  = [["Taufik", "989343489", "taufik@gmail.com", "Teknik Informatika"], ["Dono", "874378377", "dono@hgmlf.com", "Teknik api"]
// ];


// <!-- array associative -->
// <!-- defisni ya sama dengan seperti array numerik, kecuali -->
// <!-- key nya adalah string yang kita buat sendiri -->
 

$mahasiswa = [[
    "Nama" => "Taufik Nurfauzi",
    "Nomer induk" => "847879473",
    "Email" => 'taufik@gmail.com', 
    "Jurusan" => "Teknik naga",
    "gambar" => "halo.jpg"
],
[
    "Nomer induk" => "6e73e637",
    "Nama" => "Asep durjana",
    "Email" => 'asaepk@gmail.com',
    "Jurusan" => "Teknik wibu",
    "Tugas" => [12,23,54],
    "gambar" => "tidur.png"
    ]
];
// di mulai dari indeks berapa, lalu key string ya
echo $mahasiswa[1]["Jurusan"];
// ingin array di dalam array bisa di print?
// pergabungan array numeric ( indeks ) dan associate
echo $mahasiswa[1]["Tugas"][2];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul> 
        <!-- di karenakan array associate -->
        <!-- gunakan string sebagai value, bukan indeks ( ngka) -->
        <!-- manfaat ya associate, key ya adalah string bukan indess -->
        <!-- jadi kalau di php sa  lah penampatan, aman -->
        <!-- php melihat dari strinng dan di bawah ini -->
        <li>
            <img src="img/<?= $mhs["gambar"];?>">
        </li>
        <li>Nama : <?= $mhs['Nama']; ?></li>
        <li>Nomer Induk : <?= $mhs["Nomer induk"]; ?></li>
        <li>Email : <?= $mhs["Email"]; ?></li>
        <li>Jurusan : <?= $mhs["Jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>