<?php

// Cookie

// Membuat Cookie
setcookie("username", "Riezqu");

var_dump($_COOKIE);

// Memanggil value cookie
if(isset($_COOKIE["username"])) {
    echo $_COOKIE["username"];
}

// Memaksa cookie kadaluarsa / menghapus cookie
// setcookie("username", "Riezqu", time() - 1);

?> 