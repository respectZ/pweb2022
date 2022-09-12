<?php

// Dasar" PHP

$variabel = 123;
$variabel_string = "abc";


if($variabel == 13) {
    echo $variabel_string;
}

// Operator
// AND, OR, NOT
// &&, ||, !

if($variabel == 123 && $variabel_string == "abc") {
    // echo $variabel;
}

// Perulangan
for ($i=0; $i < 5; $i+=1) { 
    // echo $i;
}

/*
Kalau di Python
for i in range(0, 5, 1)
*/

$i = 5;
while($i > 0) {
    // echo $i;
    $i -= 1;
}

/*
Kalau di Python
i = 0
while(i > 5):
    print(i)
    i -= 1
*/

$variabel_array = [];
$variabel_array = array();

$variabel_array = ["Item 1", "Item 2", "Item 3", "Item 4"];
// Sama aja
$variabel_array = array("Item 1", "Item 2", "Item 3", "Item 4");

// var_dump($variabel_array);
//  nambahin newline
for ($i=0; $i < sizeof($variabel_array); $i++) { 
    // echo $variabel_array[$i] . "<br>";
}

// Array Associative
$variabel_dict = array(
    "key" => "value",
    "key1" => "value2"
);

/*
Python 
variabel_dict = {
    "key": "value"
}
*/

// var_dump($variabel_dict);
// echo $variabel_dict["key"];

foreach ($variabel_dict as $key => $value) {
    // echo $value . "<br>";
}

/*
Di Python:
for k,v in enumerate(variable_dict):
    pass
*/



$items = [
    "Koran 1",
    "Koran 2",
    "Koran 3"
];

// Modulo
// %%
// Loop 100x
// Print Koran 100x, tiap genap warnanya merah
for ($i=0; $i < 100; $i++) { 
    if($i % 2 == 0) {
        // Genap
        echo "<h1 style='color: red'>" . "Koran " . $i . "<br>";
    } else {
        echo "<h1>" . "Koran " . $i . "<br>";
    }
}

/*
Kalau di Python
for i in range(100):
    if i % 2 == 0:
        print("<h1 style='color: red'>" + "Koran " + str(i) + "<br>")
    else:
        print("<h1>" + "Koran " + str(i) + "<br>")
    */
?>