<?php 
function salam ($waktu="Malam",$nama="Admin") {
    return "Selamat $waktu, $nama";
}

?>

<?php 
// function salam ($waktu="Malam",$nama="Admin")( waktu=,"malam"<-- default no;a di html kosomg) {
//     return "Selamat $waktu, $nama";
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN FUNCTION</title>
</head>
<body>
    <h1><?php echo salam("Siang");?></h1>
</body>
</html>