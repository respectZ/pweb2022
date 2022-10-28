<?php
include_once("connection.php");

// SELECT
// $sql = "SELECT * FROM actor";
// $result = $conn->query($sql);
// while($row = $result->fetch_assoc()) {
//     var_dump($row);
// }

// INSERT
// $firstname = "John";
// $lastname = "Aegir 2";
// $sql = "INSERT INTO actor (first_name, last_name) VALUES('$firstname','$lastname');";
// // $sql = "SELECT * FROM actor";
// $result = $conn->query($sql);
// if($result) {
//     echo "OK";
// } else {
//     echo "NOT OK";
// }

// UPDATE
$lastname = "Begir";
$sql = "UPDATE actor SET last_name='$lastname' WHERE actor_id = 203;";
$result = $conn->query($sql);
if($result) {
    echo "OK";
} else {
    echo "NOT OK";
}

// DELETE 

?>