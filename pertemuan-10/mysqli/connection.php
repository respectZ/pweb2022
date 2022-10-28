<?php
$servername = "localhost";
$username = "root";
$password = "";
$port = "3306";
$dbname = "sakila";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>