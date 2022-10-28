<?php
include_once("connection.php");

// SELECT
// $sql = "SELECT * FROM actor";
// $result = $conn->query($sql);
// while($row = $result->fetch_assoc()) {
//     var_dump($row);
// }

// INSERT
$firstname = "John";
$lastname = "Aegir 2\"'";
$firstname = mysqli_real_escape_string($conn, $firstname);
$lastname = mysqli_real_escape_string($conn, $lastname);
$sql = "INSERT INTO actor (first_name, last_name) VALUES('$firstname','$lastname');";
// $sql = "SELECT * FROM actor";
$result = $conn->query($sql);
if($result) {
    echo "OK";
} else {
    echo "NOT OK";
}

// UPDATE
// $lastname = "Begir";
// $sql = "UPDATE actor SET last_name='$lastname' WHERE actor_id = 203;";
// $result = $conn->query($sql);
// if($result) {
//     echo "OK";
// } else {
//     echo "NOT OK";
// }

// DELETE 
// $sql = "DELETE FROM actor WHERE actor_id = 203;";
// $result = $conn->query($sql);
// if($result) {
//     echo "OK";
// } else {
//     echo "NOT OK";
// }

// Mengatasi SQL Injection
// mysqli_real_escape_string($conn, VALUE);
?>