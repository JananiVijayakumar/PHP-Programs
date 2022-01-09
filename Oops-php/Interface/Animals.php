<?php

/**
 * Author: Janani Vijayakumar
 * Date : 28-12-2021
 * Desc : Interface in Oops Concept
 */
// Interface 
interface Animals
{
    public function makeSound();
}

class Cat implements Animals
{
    public function makeSound()
    {
        echo "Cat : Meow ";
    }
}

class Dog implements Animals
{
    public function makeSound()
    {
        echo "\nDog : Bark ";
    }
}

class Lion implements Animals
{
    public function makeSound()
    {
        echo "\nLion : Roar ";
    }
}

$cat = new Cat();
$dog = new Dog();
$lion = new Lion();
$animals = array($cat, $dog, $lion);

foreach ($animals as $animal) {
    $animal->makeSound();
}
