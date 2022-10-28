# Pertemuan 10
# Accessing MySQL Using PHP
# Membuat File Koneksi DB
Kita bisa membuat sebuah file yang menyimpan informasi kredensial serta melakukan koneksi untuk mempermudah penggunaan database.

```connection.php```
```php
$servername = "localhost";
$username = "root";
$password = "";
$port = "3306";
$dbname = "sakila";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
```
# Menjalankan Query
## READ / SELECT
```php
include_once("connection.php");
$sql = "SELECT * FROM actor";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    var_dump($row);
}
```
## INSERT
```php
include_once("connection.php");
$firstname = "John";
$lastname = "Aegir 2";
$sql = "INSERT INTO actor (first_name, last_name) VALUES('$firstname','$lastname');";
// $sql = "SELECT * FROM actor";
$result = $conn->query($sql);
if($result) {
    echo "OK";
} else {
    echo "NOT OK";
}
```
## UPDATE
```php
include_once("connection.php");
try {
    $firstname = "Skadi";
    $email = "johnaegir@example.com";

    $sql = "UPDATE actor SET firstname=? WHERE email=?;"
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $firstname, $email);

    $res = $stmt->execute();
    if($res) {
        echo "Data berhasil diperbarui";
    } else {
        echo "Terdapat kesalahan";
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
```
## DELETE
```php
include_once("connection.php");
try {
    $email = "johnaegir@example.com";

    $sql = "DELETE FROM actor WHERE email=?"
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);

    $res = $stmt->execute();
    if($res) {
        echo "Data berhasil diperbarui";
    } else {
        echo "Terdapat kesalahan";
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
```