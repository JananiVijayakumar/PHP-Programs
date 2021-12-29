<?php

/**
 * Author : Janani Vijayakumar
 * Date : 24-12-2021
 * Desc : Calculate the sum of 2 values
 */
$sum = fn ($x, $y) => $x + $y;
$x = readline("Enter x:");
$y = readline("Enter y:");
echo "The Sum of $x and $y is :" . $sum($x, $y);
