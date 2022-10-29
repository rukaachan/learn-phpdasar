<?php 

$siswa = [['Tauifk NurFauzi',"85958042", "JL JEPANG 05 05 05", "SAYA"], 
 ["abdul", "34344343444", "JL JDNSJNDASKNK", "JSDJAS"], ];

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
    <h1>Daftar asal</h1>    <!-- CARA 1 -->
    <!-- digunakan hanya pada 1 array yang tidak banyak -->
    <!-- maksud nya dalam satu array, akan ada array lain -->
    <!-- akan menimbulkan error -->
    <ul>
        <?php foreach( $siswa as $si) :?>
            <li><?= $si; ?></li>
        <?php endforeach; ?>
    </ul>    

    <!-- CARA 2 -->
    <!-- cocok untuk array yang banyak -->
    <!-- maksud nya dalam satu array, akan ada array lain -->
     <?php foreach($siswa as $si) :?>
        <ul>
            <li>NAMA   : <?= $si[0]; ?></li>
            <li>Nomer  : <?= $si[1]; ?></li>
            <li>jalan  : <?= $si[2]; ?></li>
            <li>Random : <?= $si[3]; ?></li>
        </ul>
    <?php endforeach;  ?>
</body>
</html>
  