<?php

/**
 * Author : Janani Vijayakumar
 * Date : 24-12-2021
 * Desc : validate password using custom exception
 */

class CustomException extends Exception
{
    public function customError()
    {
        //error message
        $errorMsg = "Error on line " . $this->getLine() . " in " . $this->getFile()
            . ": \n" . $this->getMessage() . " is not a valid password.\n Please enter a valid one.";
        return $errorMsg;
    }
}
$pwd = "Password@123";
try {
    if (filter_var($pwd, FILTER_VALIDATE_EMAIL) === FALSE) {
        //exception thrown if password invalid
        throw new CustomException($pwd);
    }
} catch (CustomException $error) {
    echo $error->customError();
}
