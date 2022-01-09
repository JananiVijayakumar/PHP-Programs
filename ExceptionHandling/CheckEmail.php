<?php

/**
 * Author : Janani Vijayakumar
 * Date : 24-12-2021
 * Desc : validate email using exception
 */
class CustomException extends Exception
{
    public function errorMessage()
    {
        $error = $this->getMessage() . ' is not a valid E-Mail address.';
        return $error;
    }
}
$email = readline("Enter your Email :");
try {
    try {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
            throw new Exception($email);
        }
    } catch (Exception $e) {
        throw new customException($email);
    }
} catch (customException $e) {
    echo $e->errorMessage();
}
