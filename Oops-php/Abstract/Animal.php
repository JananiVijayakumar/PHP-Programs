<?php

/**
 * Author: Janani Vijayakumar
 * Date : 28-12-2021
 * Desc : Abstract class in Oops Concept
 */
//create abstract class
abstract class Animal
{
    public $name;
    public $color;
    public function Describe()
    {
        return "Animal name : " . $this->name . "\nAnimal color: " . $this->color;
    }
    abstract public function Greet();
}
class Dog extends Animal
{
    public function Greet()
    {
        return "Woof!";
    }

    public function Describe()
    {
        return parent::Describe() . ", and I'm a dog!";
    }
}
$animal = new Dog();
$animal->name = "Lucky";
$animal->age = 7;
echo $animal->Describe();
echo $animal->Greet();
