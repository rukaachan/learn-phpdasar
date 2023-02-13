<?php
// Pertemuan 2-Php Dasar
// Sintaks PHP

//Standar Output
// echo(isi)/echo "isi" : menampilkan output lebih satu
// dan bisa membaca yang memakai tanda koma (,)
// print/print() : sama seperti dengan echo tetapi hanya bisa menampilkan 1 parameter/output
// print_r : untuk isi array wajib ()
//var_dump : detail isi string, spasi juga terhitung


// lebih di sarankan menggunakan petik dua ("")


// pembelajaran echo
//echo boolean
echo true; //output 1
echo False; // output kosong

echo "Taufik";

// Penulisan sintaks PHP
// 1. PHP di dalam html
// 2, html di php


// variabel dan tipe data
// variabel
// untuk penggunaan variabel di awali dengan "$"// tidak boleh di awali dengan angka, boleh di akhiri angka
$nama = "Jamal";

echo "nama saya $nama";

// Operator Aritmatika
// (+,-,*,/< %)
// contoh

$x = 10;
$b = 11;
echo $x + $b;

// pergabungan string / concatenation / concat
$nama_depan = "Taufik";
$nama_belakang = "Fauzi";
echo $nama_depan. " " .$nama_belakang;

// operator assigment
// =, +=, -=, *=, /=, %=, 

$a = 5;
$a += 2;
echo $a;

$a = 5;
$a -= 2;
echo $a;

$a = 5;
echo $a;

$a = 5;
$a *= 2;
echo $a;

$a = 5;
$a /= 2;
echo $a;

$buah = "apel";
$buah .= " ";
$buah .= "mangga";
echo $buah;

// perbandingan 
// <,>,<=,>=,==, !=

var_dump(1 == "1");
// operator hanya cek nilai tidak dengan tipe data

// identitas
// operator mengecek identitas tidak dengan tipe data
// ===, !==

var_dump(1 === "1");

// operator logika
// &&, ||, !
$x = 10;
var_dump($x < 20 && $x % 2 == 0);
// menghasilkan true, karena menghasilkan true keduanya

?>











<!-- <!-- 
<!-- contoh php di dalam html -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
