<!-- assosiactive array -->
<!-- flash back pembelajaran kemarin -->
<!-- cara buat array -->

<?php 
// cara lama
$hari = array("SENIN", "SELASA", "RABU", "KAMIS", "JUM'AT");
// cara baru, lebih simple
$bulan = ["Januari", "Februari", "Maret"];
// berbeda tipe data? bisa!
$arr = [123, "teks", false];

// menampilkan array ada 2
//  var_dump dan print_r
// contoh

echo "var_dump";
var_dump($hari);
echo "<br>";

echo "<br>";
echo "print_r";
print_r($hari);
echo "<br>";
// cara mengambil salah satu array
echo "<br>";
echo "pemilihan satu indeks";
echo "<br>";
echo $bulan[2];
echo "<br>"; 
// ada struktur perulangan
// ada for, while, do while
// contoh

echo "<br>";
for($i = 0; $i < 4; $i++) {
    echo "seblack";
}
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
            background-image: linear-gradient(#74ebd5,#ACB6E5);
            text-align: center;
            line-height: 40px;
            float: left ;
            margin: 5px;
            padding: 5px;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>


<?php $angka = [[1,2,3],[4,5,6],[7,8,9]];  
// cara ambil angka tunggal dalam array yang berlipat
// echo $angka[1][2]; // tempat index ya lalu isinya
?>

<?php foreach($angka as $ak) : ?>
    <?php foreach($ak as $ab) : ?>
    <div class="kotak"><?= $ab; ?></div>
    <?php endforeach ; ?>
    <div class="clear"></div>
<?php endforeach ; ?>


</body>
</html>