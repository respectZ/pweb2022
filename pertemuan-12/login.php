<?php
session_start();

$username = "admin";
$password = "123";

// Cek sudah login atau belum
if(isset($_SESSION["username"])) {
    echo "sudah login";
} else {
    echo "belum login";

    // Cek submit form sudah atau belum
    if(isset($_POST["username"]) && isset($_POST["username"])) {

        // Cek apakah username dan password sesuai
        if($_POST["username"] == $username && $_POST["password"] == $password) {
            $_SESSION["username"] = $username;
        } else {
            echo "User tidak ditemukan";
        }
    }
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
    <form action="" method="post">
        <label for="username"></label>
        <input type="text" name="username" id="username">
        <label for="password"></label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Login">
    </form>
</body>
</html>