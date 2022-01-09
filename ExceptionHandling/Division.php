<?php

/**
 * Author : Janani Vijayakumar
 * Date : 24-12-2021
 * Desc : perform division using exception
 */
function division($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new Exception("Division by zero");
    }
    return $dividend / $divisor;
}
$dividend = readline("Enter dividend : ");
$divisor = readline("Enter divisor : ");
try {
    echo division($dividend, $divisor);
} catch (Exception $e) {
    $code = $e->getCode();
    $message = $e->getMessage();
    $file = $e->getFile();
    $line = $e->getLine();
    echo "Exception thrown in $file on line $line: [Code $code]
  $message";
} finally {
    echo "\nDivision process Complete.";
}
