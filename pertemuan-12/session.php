<?php

session_start();

$_SESSION["username"] = "Riezqu";

// var_dump($_SESSION);

if(isset($_SESSION["username"])) {
    echo $_SESSION["username"];
}

// Hapus semua session
// session_destroy();
// echo $_SESSION["username"];


?>