<?php 

$nama = [
    "firstname" => "Amel"
];

$panjang = [
    "firstname" => "Park",
    "lastname" => "Linda"
];

$nama_panjang = $nama + $panjang;
var_dump($nama_panjang);

$a = [
    "nama" => "Amel",
    "umur" => 16
];

$b = [
    "umur" => 16, 
    "nama" => "Amel"
];

var_dump($a == $b);
var_dump($a === $b);

var_dump($a != $b);
var_dump($a !== $b);
