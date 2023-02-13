<?php
// DATE
//  UNTUK MENAMPILKAN TANGGAL DAN FORMAT TERTENTU

echo date("l, d-M-Y");
echo "------";

// TIME 
// UNIX TIMESTAP / EPOCH TIME
// DETIK YANG SUDAH BERLALU SEJAK 1 JANUARI 1970
// echo time();
echo time();

echo "------";

// cara melihat hari kedepannya 
// contoh : sekarang senin, 2 hari ya lagi apa ya? tentu rabu
// tetapi bagaimana dalam bahasa php?

echo date("l", time()+172800);
echo "------";


// +172800 : b erasal dari perhitungan

// 1 jam : 3600
// ADA 24 JAM DALAM SEHARI 
// YANG BERARTI 3600X24 : 86400
// LALU 86400X2(HARI) : 172800

// ADA CARA SIMPLE YANG BIAARKA PHP HITUNG

echo date("l", time()+60*60*24*2);
echo "------";


//  CARA CHECK HARI KEBELAKANG

echo date("l", time()-60*60*24*2);
echo "------";


// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun 
echo mktime(0,0,0,11,9,2005);
echo "------";
echo date("l", mktime(0,0,0,11,9,2005));

// strtotime
// sama dengan mktime, hanya di strtotime memakai string
echo date(strtotime("9 nov 2005"));

?>