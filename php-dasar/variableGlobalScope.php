<?php

$name = "amel"; // global scope

function sayHello() {
    global $name; // global keyword

    echo $name . PHP_EOL;

    echo $GLOBALS["name"] . PHP_EOL; // $GLOBALS variable 
}

sayHello();