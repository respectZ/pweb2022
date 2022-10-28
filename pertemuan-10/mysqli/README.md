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
$lastname = "Begir";
$sql = "UPDATE actor SET last_name='$lastname' WHERE actor_id = 203;";
$result = $conn->query($sql);
if($result) {
    echo "OK";
} else {
    echo "NOT OK";
}
```
## DELETE
```php
$sql = "DELETE FROM actor WHERE actor_id = 203;";
$result = $conn->query($sql);
if($result) {
    echo "OK";
} else {
    echo "NOT OK";
}
```

## Mengatasi SQL Injection
```php
$firsname = mysqli_real_escape_string($conn, $firstname);
```