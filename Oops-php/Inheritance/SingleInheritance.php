<?php

class Employees
{

    public $name = "janu";
    public $age = 20;


    function getName()
    {

        echo "Name :" . $this->name;
    }
}
class EmployeeInfo extends Employees
{

    function getAge()
    {

        echo "\nAge :" . $this->age;
    }
}
$employee = new EmployeeInfo();
$employee->getName();
$employee->getAge();
