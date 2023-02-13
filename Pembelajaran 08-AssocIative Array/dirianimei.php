<?php

$anime =  [
    [
        "Gambar" => "halo.jpg",
        "Nama" => "Futaba, Rio",
        "Sifat" => "Cerdas dan pendiam",
        "Darimana" => "Anime Buny Girl",
        "Studio" => "Cloverworks"
    ],
    [
        "Gambar" => "awan.png",
        "Nama" => "Sakurajima, Mai",
        "Sifat" => "Dewasa, dan pemberani",
        'Darimana' => "Anime Buny Girl",
        "Studio" => "Cloverworks"
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
    <?php foreach ($anime as $an) : ?>
        <ul>
            <li>
                <img src="img/<?= $an["Gambar"]; ?>">
            </li>
            <li>Nama : <?= $an["Nama"]; ?></li>
            <li>Sifat : <?= $an["Sifat"]; ?></li>
            <li>Darimana : <?= $an["Darimana"]; ?></li>
            <li>Studio : <?= $an["Studio"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>