<?php 

$nilai = "D";

switch ($nilai) {
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda Lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak Lulus" . PHP_EOL;
        break;
    default: 
    echo "Mungkin anda salah jurusan" . PHP_EOL; 
}

$nilai = "a";

switch ($nilai) :
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda Lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak Lulus" . PHP_EOL;
        break;
    default: 
    echo "Mungkin anda salah jurusan" . PHP_EOL; 
    endswitch;