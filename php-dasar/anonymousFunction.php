<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("amel");
$sayHello("eko");

function sayGoodBye (string $name, $filter) {
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodBye("amel", function (string $name): string {
    return strtoupper($name);
});

// or

$filterFunction = function (string $name): string {
    return strtoupper($name);
};

sayGoodBye("amel", $filterFunction);

$firstName = "Eko";
$lastName = "Kurniawan";

$sayHelloAmel = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloAmel();

$firstName = "amel";
$lastName = "linda";
$sayHelloAmel();
