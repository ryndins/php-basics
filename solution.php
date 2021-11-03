<?php

function isPerfect($number)
{
    if ($number <= 0) {
        return false;
    }

    $acc = [];

    for ($i = 1; $i < $number; $i++) {
        if ($number % $i === 0) {
            array_push($acc, $i);
        }
    }

    return array_sum($acc) === $number;
}

echo isPerfect(28);