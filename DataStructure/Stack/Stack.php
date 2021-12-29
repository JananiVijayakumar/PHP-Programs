<?php

/**
 * Author: Janani Vijayakumar
 * Date : 28-12-2021
 * Desc : Stack Program
 */
class Stack
{
    public $stack;
    public $size;

    public function __construct($size = 5)
    {
        $this->stack = array();
        $this->size = $size;
    }

    // Insert an element into stack
    public function push($data)
    {
        //Check stack overflow
        if (count($this->stack) < $this->size) {
            //Inserts an element at the beginning
            array_unshift($this->stack, $data);
        } else {
            echo "Stack is overflow";
        }
    }
    //Removes an element from a stack
    public function pop()
    {
        // If stack is empty
        if (empty($this->stack)) {
            echo "Stack is empty";
        } else {
            return array_shift($this->stack);
        }
    }
}

$stackelement = new Stack();
//add a element into stack
echo "Poped elements in Stack are : ";
echo $stackelement->push(4);
echo $stackelement->push(5);
//delete a element into stack
echo $stackelement->pop(); // Pop 5
//add a element into stack
echo $stackelement->push(7);
echo $stackelement->push(9);
echo $stackelement->push(8);
//delete a element into stack
echo $stackelement->pop();
echo $stackelement->pop();
echo "\nCurrent Elements in stack are : \n";
print_r($stackelement);
