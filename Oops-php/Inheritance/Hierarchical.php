<?php

class Animal
{
    public $name;
    public function types()
    {
        echo $this->name . "Details :\n";
    }
}
class WildAnimal extends Animal
{

    public function food()
    {
        echo $this->name . " Food :";
        echo "Meat\n";
    }
}
class DomesticAnimal extends Animal
{
    public function living()
    {
        echo $this->name . " Lives in ";
        echo "Home\n";
    }
}

$animal = new WildAnimal();
$animal->name = "Lion";
$animal->types();
$animal->food();
$animal1 = new DomesticAnimal();
$animal1->name = "Cat";
$animal1->types();
$animal1->living();
