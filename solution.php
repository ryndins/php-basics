<?php

function binarySum($a, $b)
{
    return decbin((bindec($a) + bindec($b)));
}

echo binarySum('1101', '101');