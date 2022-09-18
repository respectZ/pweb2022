<?php

// def penjumlahan(a, b):
    // c = a + b

    // penjumlahan(12, 24)

// function penjumlahan($a, $b) {
//     $c = $a + $b;
//     echo $c;
// }

// penjumlahan(12, 13);

function penjumlahan($a, $b) {
    $c = $a + $b;
    return $c;
}

$list_angka = [[13, 19], [24, 65], [23, 87], [99,56], [60, 76]];

// echo $list_angka[0][0];

// $hasil = penjumlahan(12, null);
// echo "hasil penjumlahan adalah : " . $hasil;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Belajar Function</h1>
    <ol>
        <?php for($i=0; $i<5; $i++) { ?>
        <li>Hasil perhitungan : <?php echo penjumlahan($list_angka[$i][0], $list_angka[$i][1]); ?></li>
        <?php } ?>
    </ol>
</body>
</html>

