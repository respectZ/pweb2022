# Pertemuan 7 - Practical PHP
# printf
<details>
  <summary>Content</summary>


Printf digunakan untuk print secara formatting layaknya printf pada C.
```php
printf("Nama: %s, Umur %d", "Emu", 18);
```
Pada kode di atas, terdapat 2 simbol, yaitu ```%s``` dan ```%d```.

```%s``` akan ditimpa dengan ```Emu```, sedangkan  ```%d``` akan ditimpa dengan ```18```, sehingga menghasilkan:

```txt
Nama: Emu, Umur 18
```
Tabel Simbol
|  Simbol | Konversi  | Contoh (123) |
|---|---|---|
| %b  | Binary integer  |  1111011 |
| %c  | ASCII Character  | { |
| %e | Scientific Notation  | 1.23000e+2  |
| %f | Floating Point  | 123.00000  |
| %o | Octal Integer  | 173  |
| %d | Signed Integer  | 123  |
| %u | Unsigned Integer  | 123  |
| %s | String  | 123  |
| %x | Lowercase Hex  | 7b  |
| %X | Uppercase Hex  | 7B  |

</details>
؜

## Precision Setting
<details>
  <summary>Content</summary>


Digunakan untuk mengatur presisi bilangan desimal.
```php
printf("Hasil dari 10 / 3 adalah %.2f", 10 / 3)
```
Akan menghasilkan
```txt
Hasil dari 10 / 3 adalah 3.34
```

</details>
؜


## Decimal Padding
<details>
  <summary>Content</summary>


```php
printf("The result is $%15f\n", 123.42 / 12);
// Pad to 15 spaces, fill with zeros
printf("The result is $%015f\n", 123.42 / 12);
// Pad to 15 spaces, 2 decimal places precision
printf("The result is $%15.2f\n", 123.42 / 12);
// Pad to 15 spaces, 2 decimal places precision, fill with zeros
printf("The result is $%015.2f\n", 123.42 / 12);
// Pad to 15 spaces, 2 decimal places precision, fill with # symbol
printf("The result is $%'#15.2f\n", 123.42 / 12);
```
```txt
The result is $      10.285000
The result is $00000010.285000
The result is $          10.29
The result is $000000000010.29
The result is $##########10.29
```

</details>
؜


## String Padding
<details>
  <summary>Content</summary>


```php
$h = 'Enanan';
printf("[%s]\n", $h); // Standar
printf("[%12s]\n", $h); // Pad left
printf("[%-12s]\n", $h); // Pad right
printf("[%012s]\n", $h); // Pad left 0
printf("[%'#12s]\n\n", $h); // Pad left #
```
```txt
[Enanan]
[      Enanan]
[Enanan      ]
[000000Enanan]
[######Enanan]
```
</details>
؜


## sprintf
<details>
  <summary>Content</summary>


Kita bisa menggunakan ```sprintf``` bila ingin melakukan formatting tanpa melakukan output.
```php
$nama = sprintf("Nama: %s, Umur: %d", "Enanan", 17)
```
</details>
؜


# Date and Time
<details>
  <summary>Content</summary>


## Get current timestamp in unix

```php
$current_timestamp = time();
echo $current_timestamp;
```
Agar dapat menampilkan tanggal berdasarkan timestamp unix, kita dapat memanggil fungsi ```date```.
```php
$display_date = date($format, $timestamp);
```
Sebagai contoh:
```php
$display_date = date("d/m/Y", time());
echo $display_date;
```
Akan menghasilkan
```php
07/10/2022
```
Terdapat beberapa format seperti pada string formatting yang terdapat tabel berikut.
## Hari
| Format | Deskripsi | Output |
|---|---|---|
| d | Tanggal | 01 - 31|
| D | Hari (3 huruf) | Sun - Sat |
| j | Tanggal (angka, tanpa padding) | 1 - 31 |
| l | Hari (huruf) | Sun - Sat |
| N | Hari (indeks) (Monday - Sunday) | 1 - 7 |
| S | Suffix untuk hari | st, nd, rd, dan th |
| w | Hari (indeks) (Sunday - Saturday) | 0 - 6 |
| z | Day of year | 0 - 365 |

## Minggu
| Format | Deskripsi | Output |
|---|---|---|
| w | Week of year | 1 - 52 |

## Bulan
| Format | Deskripsi | Output |
|---|---|---|
|F|Nama bulan| January - December |
|m|Bulan (angka padding) | 01 - 12 |
|M|Nama bulan* (3 huruf) | Jan - Dec |
|n|Bulan (angka, no padding) | 1 - 12 |
|t|Hari dalam 1 bulan | 28 - 31|

## Tahun
| Format | Deskripsi | Output |
|---|---|---|
|L|Tahun Kabisat| 1 = Yes, 0 = No |
|y|Tahun 2 digit | 00 to 99 |
|Y|Tahun 4 digit | 0000 to 9999|
## Spesifikasi Waktu
| Format | Deskripsi | Output |
|---|---|---|
|a|Meridium lowercase| am atau pm|
|A|Meridium uppercase| AM atau PM|
|g|Jam 12-hour format, no padding | 1 - 12|
|G|Jam 24-hour format, no padding | 0 - 23|
|h|Jam 12-hour format, padding | 01 - 12|
|H|Jam 24-hour format, padding | 00 - 23|
|i|Menit, padding| 00 - 59|
|s|Detik, padding| 00 - 59|
</details>
؜


# File Handling

## Membuat file
<details>
  <summary>Content</summary>


```php
$fh = fopen("testfile.txt", 'w') or die("Gagal membuat file");
$text = "Hello World!\nLine 2";
fwrite($fh, $text) or die("Gagal menulis file");
fclose($fh);
echo "File 'testfile.txt' berhasil dibuat";
```
</details>
؜


## Membaca file
<details>
  <summary>Content</summary>


```php
$fh = fopen("testfile.txt", 'r') or die("Gagal membaca file");
$line = fgets($fh);
fclose($fh);
echo $line;
```
</details>
؜


## Mengcopy file
<details>
  <summary>Content</summary>


```php
copy('testfile.txt', 'testfile2.txt') or die("Gagal mengcopy file");
echo "File berhasil dicopy -> 'testfile2.txt'";
```
</details>
؜

## Memindahkan / rename file
<details>
  <summary>Content</summary>
```php
if (!rename('testfile2.txt', 'testfile2.new'))
    echo "File gagal diubah";
else echo "File berhasil diubah -> 'testfile2.new'";
```
</details>
؜

## Menghapus file
<details>
  <summary>Content</summary>
```php
if (!unlink('testfile2.new'))
    echo "File tidak dapat dihapus";
else
    echo "File 'testfile2.new' berhasil dihapus.";
```
</details>
؜

# Exercise 1
<details>
  <summary>Spoiler</summary>


Buatlah kode untuk menampilkan tanggal untuk 1 minggu selanjutnya, dengan format sebagai berikut:
```txt
Sabtu, 8 Oktober 2022
Minggu, 9 Oktober 2022
...
Jumat, 14 Oktober 2022
```
</details>
؜


# Exercise 2
<details>
  <summary>Spoiler</summary>


Buatlah kode untuk memformat desimal integer ke rupiah.

Contoh:
```
50000
```
Maka akan menjadi:
```
Rp 50.000
```
</details>
؜
