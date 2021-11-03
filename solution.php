<?php

function isBalanced($text)
{
    if (empty($text)) {
        return false;
    }

    $balance = 0;
    for ($i = 0; $i < strlen($text); $i++) {
        $balance = ($text[$i] === '(') ? $balance + 1 : $balance - 1;
        if ($balance < 0) {
            return false;
        }
    }

    return $balance === 0;
}