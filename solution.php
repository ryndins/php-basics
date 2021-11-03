<?php

function isPowerOfThree($value)
{
    $current = 1;

    while ($current <= $value) {
        if ($current === $value) {
            return true;
        }
        $current *= 3;
    }

    return false;
}

var_dump(isPowerOfThree(3));