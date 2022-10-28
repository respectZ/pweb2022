<?php
include_once("connection.php");

// READ
// try {
//     $stmt = $conn->prepare("SELECT * FROM actor");
//     $stmt->execute();

//     $result = $stmt->fetchAll();
//     // var_dump($result);
//     echo var_dump($result[0]);
// } catch(PDOException $e) {
//     echo "Error: " . $e->getMessage();
// }

// INSERT

// $table = "actor";
// $data = array(
//     "firstname" => "John",
//     "lastname" => "Aegir",
//     "email" => "johnaegir@example.com"
// );
// $col = join(" ,", array_keys($data));
// $val = join(" ," ,array_values($data));
// try {
//     $sql = "INSERT INTO $table ($col) VALUES($val);"
//     $stmt = $conn->prepare($sql);
//     $res = $stmt->execute();
//     if($res) {
//         echo "Data berhasil ditambahkan";
//     } else {
//         echo "Terdapat kesalahan";
//     }
// } catch(PDOException $e) {
//     echo "Error: " . $e->getMessage();
// }
try {
    $firstname = "John";
    $lastname = "Aegir";

    $sql = "INSERT INTO actor (first_name, last_name) VALUES(?,?);";
    $stmt = $conn->prepare($sql);
    // $stmt->bindParam("ss", $firstname, $lastname);
    $stmt->bindParam(1, $firstname);
    $stmt->bindParam(2, $lastname);

    $res = $stmt->execute();
    if($res) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Terdapat kesalahan";
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>