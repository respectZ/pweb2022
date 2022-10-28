<?php
include_once("connection.php");
try {
    $stmt = $conn->prepare("SELECT * FROM actor");
    $stmt->execute();

    $result = $stmt->fetchAll();
    // var_dump($result);
    echo var_dump($result[0]);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>