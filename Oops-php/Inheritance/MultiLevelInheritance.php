<?php

class Employees
{

    public $name = "janu";
    public $age = 20;
    public $salary = 2000;


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
class EmployeeDetails extends EmployeeInfo
{

    function getSalary()
    {

        echo "\nSalary :" . $this->salary;
    }
}
$employee = new EmployeeDetails();
$employee->getName();
$employee->getAge();
$employee->getSalary();
