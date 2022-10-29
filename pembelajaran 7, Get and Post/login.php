<?php 
// cek apakah tombol submit sudah di tekan atau belum?

if( isset($_POST["submit"])) {
    // cek apakah username % password
    if( $_POST["username"] == "admin" && $_POST["password"] == "123") {

    // jika benar, redirect ke halaman admin
     header("Location: admin.php");
     exit;
} else {
    $error = true;
}
    // jika salah, tampilka pesan salah


}


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
<h2>Login Admin</h2>
<?php if( isset($error)) : ?>
    <p style="color:rebeccapurple"; font-style:italic;>">username / password salah"</p>   
<?php endif; ?>    
<ul>
<form action="" method="post">
    <li>
        <label for="username">username</label>
        <input type="text" name="username" id="username">
    </li>
    <li>
        <label for="password">password</label>
        <input type="password" name="password" id="password">
    </li>
    <li>
        <button type="submit" name="submit">Login</button>
    </li>
</form>
</ul>
</body>
</html>