<?php

function sayHello(string $name, callable $filter) {
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Amel", "strtoupper");
sayHello("Amel", "strtolower");
sayHello("Amel", function (string $name): string {
    return strtoupper($name);
});
sayHello("Amel", fn($name) => strtolower($name));
