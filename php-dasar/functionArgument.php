<?php 

// function sayHello($name = "anonymous") {
//     echo "Hello $name" . PHP_EOL;
// }

// sayHello("amel");
// sayHello();

function sayHello($firstName, $lastName = "") {
    echo "Hello $firstName $lastName" . PHP_EOL;
}

sayHello("eko");
sayHello("budi");
sayHello("amel", "linda");

function sum($first, $last) {
    $total = $first + $last;
    echo "$first + $last = $total" . PHP_EOL;
}

sum(100, 100);
sum("100", "100");
sum(true, false);
// sum([], []);

function sumAll(...$values) {
    $total = 0;

    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(", ", $values) . "= $total" . PHP_EOL;
}

$array = [1, 2, 3, 4, 5];

sumAll(1, 2, 3, 4, 5);
sumAll(...$array);
