<?php 

$name = "Amel";

// dot operator
echo "Name : " . $name . PHP_EOL;
echo "Nilai : " . 100 . PHP_EOL;

// konversi string
$valueString = (string) 100;
var_dump($valueString);

$valueInt = (int) "contoh";
var_dump($valueInt);

$valueFloat = (float) "1.23";
var_dump($valueFloat);

$nama = "Amel";

echo $nama[0] . PHP_EOL;
echo $nama[1] . PHP_EOL;
echo $nama[2] . PHP_EOL;
echo $nama[3] . PHP_EOL;

echo "Hello $nama, Selamat belajar" . PHP_EOL; // variable parsing

echo "All Too Well - Taylor Swift ({$nama}'s version)";
