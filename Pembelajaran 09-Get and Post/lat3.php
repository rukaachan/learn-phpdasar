<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
     <form action="lat4.php" method="post ">
        Masukkan nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">KIRIM!</button>
     </form>
     <!-- contoh dengan dengan cara kain -->
     <?php if( isset ($_POST["nama"])  ) :?>
    <h2>Halo selamat datang</h2>
    <?php endif ;?>
     <form action="lat4.php" method="post ">
        Masukkan nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">KIRIM!</button>
     </form>

</body>
</html>