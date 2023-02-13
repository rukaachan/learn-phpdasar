<?php 

if( !isset($_GET["nama"]) || 
    !isset($_GET["sifat"]) || 
    !isset($_GET["darimana"]) ||
    !isset($_GET["studio"])||
    !isset($_GET["gambar"])) {

    // redirect
    header("Location: lat1.php");
    exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Anime</title>
</head>
<body>
    <ul>
        <li>
            <img src="img/<?= $_GET["gambar"];?>">
        </li>
        <li><?= $_GET["nama"];?></li>
        <li><?= $_GET["sifat"];?></li>
        <li><?= $_GET["darimana"]; ?></li>
        <li><?= $_GET["studio"]; ?></li>
    </ul>
<a href="lat1.php">Beranda</a>
</body>
</html>