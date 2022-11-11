<?php
session_start();

// Cek udah login atau belum
if(isset($_SESSION["username"])) {
    echo "Selamat datang, " . $_SESSION["username"];
} else {
    echo "Anda belum login";
}

?>