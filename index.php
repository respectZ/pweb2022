<?php

$array = array("test1", "test2", "test3");
$array1 = ["test1", "test2", "test3"];

$array_asoc = array("test1" => "Buku", "test2" => "Penggaris", "test3" => "Tas"); 
$array_asoc1 = ["test1" => "Buku", "test2" => "Penggaris", "test3" => "Tas1"]; 

$array_multi = [["buku", "penggaris"], ["tas", "laptop"]]; 

$test = 12;
// echo $array[0][0];

// var_dump($array_asoc1);

// for ($a=0; $a<count($array); $a++) {
//     echo $array[$a] . "</br>";
// }

// foreach ($array_asoc as $key => $value) {
//     echo $key . " : " . $value . "</br>";
// }

// is_array

// echo is_array($array);
// echo is_array($test);

// count

// echo count($array);

// sort

$coba = ["laptop", "buku", "kursi", "tv", "meja"];
// sort($coba);

// for($i=0;$i<count($coba);$i++) {
//     echo $coba[$i] . "</br>";
// }

// shuffle

// shuffle($coba);

// for($i=0;$i<count($coba);$i++) {
//     echo $coba[$i] . "</br>";
// }



// explode

// $teks = "coba test 1";

// var_dump(explode("test", $teks));


// extract

// $test1 = "coba";
// extract($array_asoc);

// echo $test1 . "</br>";
// echo $test2 . "</br>";
// echo $test3 . "</br>";

// compact

// $firstname = "Kukuh";
// $lastname = "Satrio";

// $result = compact("firstname", "lastname");

// var_dump($result);

// reset

echo current($coba) . "</br>";
next($coba) . "</br>";
echo next($coba) . "</br>";
echo prev($coba) . "</br>";
echo current($coba) . "</br>";
echo reset($coba) . "</br>";
echo end($coba) . "</br>";

// end

?>

