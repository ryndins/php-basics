<?php

function fizzBuzz(int $begin, int $end)
{
    $output = [];

    if ($begin > $end) {
        return join('', $output);
    }

    for ($i = $begin; $i <= $end; $i++) {
        if ($i % 3 === 0 && $i % 5 === 0) {
            array_push($output, 'FizzBuzz');
        } elseif ($i % 3 === 0) {
            array_push($output, 'Fizz');
        } elseif ($i % 5 === 0) {
            array_push($output, 'Buzz');
        } else {
            array_push($output, $i);
        }
    }

    return join(' ', $output);
}

echo fizzBuzz(1, 2);