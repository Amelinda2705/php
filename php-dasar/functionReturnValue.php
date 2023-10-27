<?php

function sum($first, $last): int {
    $sum = $first + $last;
    return $sum;
}

$total = sum(11, 22);
echo $total . PHP_EOL;

function getFinalValue(int $value): string {
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 50) {
        return "D";
    } else {
        return "E";
    }

    echo "Ups" . PHP_EOL;
}

$score = getFinalValue(90);
echo $score;

$score = getFinalValue(70);
echo $score;
