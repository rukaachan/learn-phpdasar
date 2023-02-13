<!-- pembelajaran php array -->

<!-- array -->
<!-- variabel yang dapat memiliki banyak nilai --> 
<!-- element pada array boleh memiliki tipe data berbeda-->
<?php 

// cara lama
$hari1 = array("senin", "selasa", "rabu", "kamis");
// cara baru
$bulan = ["senin", "selasa", "rabu", "kamis"];
$beda = [123,"kata",false];

// tidak bisa di jalankan dengan echo
// di jalankan dengan var_dump/print_r

// perbedaan ya terletak tipe data
// di var_dump akan di beritahu "tipe data isi array"
// penghitungan dalam php index ya di mulai dari 0

var_dump($hari1);
echo "<br>";
print_r($bulan);
echo "<br>";

//  meanmpilkan 1 elemen pada array
echo $hari1[1];
echo $bulan[2];

// MENAMBHKAN ELEMEN BARU PADA ARRAY

var_dump($beda);
$beda [] = "awikwok";
echo "<br>";
var_dump($beda);

// bisa menambahkan 2 elemen

var_dump($beda);
$beda [] = "awikwok";
$beda [] = "kiciw";
$beda [] = "xixixi";
echo "<br>";
var_dump($beda);

$angka1 = [1,2,3,4,5,9,4,6,7,8];
$angka2 = [10,11,12,14,15,16,17];
echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       .kotak {
            width: 50px;
            height: 50px;
            background-color: #fc6767;
            text-align: center;
            line-height: 50px;
            float: left;
            border: 1px solid blue;
            margin: 5px;
            padding: 5px;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body> 
    <!-- cara seperti ini akan error bila suatu array ya akan menambah/berkurang -->
    <!-- solusi nya menggunakan count(namavariabel) -->
    <?php for ( $i = 0; $i < 5; $i++) { ?>
    <div class="kotak"> <?php echo $angka1[$i];  ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php for ($i = 0; $i < count($angka1); $i++) { ?>
        <div class="kotak"><?= $angka1[$i]; ?></div>
    <?php }  ?>
    <div class="clear"></div>

    <?php foreach($angka1 as $a) { ?>
        <div class="kotak"><?= $a; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach ( $angka1 as $a) :?>
        <div class="kotak"><?= $a;  ?></div>
        <?php endforeach ; ?>
</body>
</html>

