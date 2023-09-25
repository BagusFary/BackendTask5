<?php

$matriks1 = [
    5,5,5,5,5,
];

$matriks2 = [
    6,
    6,
    6,
    6,
    6
];

// Perulangan Matriks
foreach($matriks2 as $key => $val1){
    $row = 0;
    foreach($matriks1 as $val2){
        $kali = $val1 * $val2;
        $row = $row + $kali;
    }

    echo "<p>$row<p>";

}

echo "<hr>";

$number = [
    3, 2, 1
];

$star = [
    "*", "*", "*", "*", "*",
];

for ($i = 0; $i < 5; $i++) {
    if ($i == 0) foreach ($star as $data) {
        echo $data;
    } 

    if ($i !== 0){
        echo "*";
        foreach ($number as $value) {
            echo "$value";
        }
        array_shift($number);
    } 

    echo "<br>";

    array_pop($star);
}


?>