<!-- superglobal

$_GET
$_POST
$_REQUEST
$_SESSION
$_COOKIE
$_SERVER
$_ENV

Menggunakan tipe data associate
 -->
<!-- GET -->
<?php 
$_GET["User"] = "Taufik NurFauzi";
$_GET["Nomer"] = "3746734"; 

var_dump($_GET);

$anime =  [[
    "gambar" => "halo.jpg",
    "nama" => "Futaba, Rio",
    "sifat" => "Cerdas dan pendiam",
    "darimana" => "Anime Buny Girl",
    "studio" => "Cloverworks"
],
[
    "gambar" => "awan.png",
    "nama" => "Sakurajima, Mai",
    "sifat" => "Dewasa, dan pemberani",
    'darimana'=> "Anime Buny Girl",
    "studio" => "works"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Anime</title>
</head>
<body>
<h1>Daftar Anime</h1>
<ul>
<?php foreach($anime as $an) : ?>
    <li>
        <a href="lat2.php?nama=<?= $an["nama"];?>&sifat=
        <?= $an["sifat"];?>&darimana=<?= $an["darimana"];?>&studio=
        <?= $an["studio"];?>&gambar=<?= $an["gambar"];?>"><?= $an["nama"];?></a>
    </li>
<?php endforeach ; ?> 
</ul>
</body>
</html>