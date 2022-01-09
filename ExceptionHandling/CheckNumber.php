<?php

/**
 * Author : Janani Vijayakumar
 * Date : 24-12-2021
 * Desc : Check the number is less than 1
 */
$number = readline("Enter value :");
function checkNum($number)
{
    if ($number > 1) {
        throw new Exception("Invalid input!!\nValue must be 1 or below");
    }
    return true;
}
try {
    checkNum($number);
    echo 'Valid Input';
} catch (Exception $exception) {
    echo 'Warning: ' . $exception->getMessage();
}
