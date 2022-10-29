<?php
// pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array


// Dalam pengulangan ada tiga kondisi
// 1. inisialisasi (variabel awal untuk pengulangannya)
// 2. kondisi terminasi (kapan waktu nya variabel di hentikan nya)
// 3. increment/decrement (pengulangan maju/mundur)
echo 'for';
echo '<br>';

for ( $i = 0; $i < 5; $i++) {
    echo "buah <br>";
}

echo '<br>';
// for   ( $i (variabel) = 0 (dimulai dengan 0); $! < 5 (kurang dari 5) $i++(melalukan penambahan))) {
        //  echo "XXXXX" <--- ($i)
// }

echo "while";
echo '<br>';

$i = 0;
while( $i < 5 ){
    echo "worl";
$i++;
}
echo '<br>';


// $i = 0; inisialisasi 
// while( $i < 5 ) kondisi terminasi {
    // echo "worl";
// $i++; increment/deecrement
// }


// DO WHILE
echo '<br>';
echo "DO WHILE";
echo '<br>';

$i = 0;
do {
    echo "Hello";
$i++; 
    }while ( $i < 5 );
echo '<br>';

// melakukan tindakan echo 1x berbeda dengan while, yang bisa salah saat di bagian
// kondisi terminasi - while($i < 5), akan 0

// YANG BERARTI
// DO WHILE MELALUKAN PERINTAH 1X BARU CEK
//  WHILE CEK LALU PERINTAH -BILA FALSE AKAN 0

echo "<br>";

$i = 4;
do {
    echo"yokoso";
$i++;
} while ($i < 5 );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
   </head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
    <?php 
     
     for($i = 1; $i <= 3; $i++) {
        echo "<tr>";  
        for($j =1; $j <= 5; $j++) {
           echo "<td>$i,$j</td>";
        }
        echo "</tr>";
     }

    ?>
</table>
</body>
</html>


<!-- buat tabel otomatis php -->

<!-- <table border="1" cellpadding="10" cellspacing="0">
    <!-- //<?php  
     
    //  for($i = 1; $i <= 3; $i++) {
    //     echo "<tr>";
    //     for($j =1; $j <= 5; $j++) {
            //  echo "<td>$i,$j</td>";
     //         $i sebagai tabel panjang
    //         $j sebagai tabel collumn 
    //     }
    //     echo "</tr>";
    //  }


// TERDAPAT CARA LAIN CEK ---> LAT2.PHP 