<?php
class Animal
{
    public function sound()
    {
        echo "Dog Sound :";
    }
}
trait dog
{
    public function dogSound()
    {
        echo " Bark";
    }
}
class Color extends Animal
{
    use dog;
    public function dogColor()
    {
        echo "\nDog Color :Brown";
    }
}
$test = new Color();
$test->sound();
$test->dogSound();
$test->dogColor();
