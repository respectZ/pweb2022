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
$dbname = "sakila"

try {
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
```
# Menjalankan Query
## READ / SELECT
```php
include_once("connection.php");
try {
    $stmt = $conn->prepare("SELECT * FROM actor");
    $stmt->execute();

    $result = $stmt->fetchAll();
    var_dump($result);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
```
## INSERT
```php
include_once("connection.php");
$table = "actor";
$data = array(
    "firstname" => "John",
    "lastname" => "Aegir",
    "email" => "johnaegir@example.com"
);
$col = join(" ,", array_keys($data));
$val = join(" ," ,array_values($data));
try {
    $sql = "INSERT INTO $table ($col) VALUES($val);"
    $stmt = $conn->prepare($sql);
    $res = $stmt->execute();
    if($res) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Terdapat kesalahan";
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
```
```php
include_once("connection.php");
try {
    $firstname = "John";
    $lastname = "Aegir";
    $email = "johnaegir@example.com";

    $sql = "INSERT INTO $table (firstname, lastname, email) VALUES(?,?,?);"
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $firstname, $lastname, $email);

    $res = $stmt->execute();
    if($res) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Terdapat kesalahan";
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
```
| Kode | Tipe  |
|---|---|
| i | Integer  | 
| s | String  |
| d | Double  |
| b | Blob  | 
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