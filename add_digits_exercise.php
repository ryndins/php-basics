<?php

function addDigits(int $number)
{
    $result = $number;
    while (!isSingleDigit($result)) {
        $result = sumDigits($result);
    }
    return $result;
}

function isSingleDigit(int $number)
{
    return $number < 10;
}

function sumDigits(int $number)
{
    return array_sum(array_map(fn($item) => (int) $item, str_split($number, 1)));
}


echo addDigits(78911);