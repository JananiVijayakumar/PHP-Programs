<?php

/**
 * Author : Janani Vijayakumar
 * Date : 24-12-2021
 * Desc : multiply 2 values
 */
$y = readline("Enter y:");
$fn1 = fn ($x) => $x * $y;
$fn2 = function ($x) use ($y) {
    return $x * $y;
};
var_export($fn1(readline("Enter val:")));
