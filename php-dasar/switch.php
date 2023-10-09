<?php 

$nilai = "D";

switch ($nilai) {
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "C":
    case "B":
        echo "Anda Lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak Lulus" . PHP_EOL;
        break;
    default: 
    echo "Manusia salah jurusan" . PHP_EOL; 
}