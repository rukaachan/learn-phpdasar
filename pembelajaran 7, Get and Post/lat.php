<?php 


// <!-- belajar GET AND POST  -->

$x = 10;
$a = 20;
function tampil() {
    // global berfungsi untuk mencari nilai variabel di luar function
    global $x;
    echo $x;
    // echo $a // bila seperti ini akan salah karena
    // variabel ya berada di luar function 
    // seharusnya di dalam
    // contoh
    $b = 20;
    echo $b;
}

tampil();

?>
