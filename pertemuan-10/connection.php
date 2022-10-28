<?php
$servername = "localhost";
$username = "root";
$password = "";
$port = "3306";
$dbname = "sakila";

// Handling Error
try {
    // Bikin variabel buat nyimpen koneksi
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // ngeprint kalo ada error
    echo "Connection failed: " . $e->getMessage();
}
?>