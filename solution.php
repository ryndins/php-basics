<?php

function isHappy($ticket)
{
    $halfValue = strlen($ticket) / 2;
    $leftSum = array_sum(str_split(substr($ticket, 0, $halfValue), 1));
    $rightSum = array_sum(str_split(substr($ticket, $halfValue), 1));

    return $leftSum == $rightSum;
}

echo isHappy('123322');