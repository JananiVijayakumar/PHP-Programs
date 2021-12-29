<?php

/**
 * Author: Janani Vijayakumar
 * Date : 28-12-2021
 * Desc : Singly linked list
 */
include "C:\wampserver64\www\Oops-php\DataStructure\LinkedList\Node.php";

class SinglyLinkedList
{
    public $head;
    //constructor to create an empty LinkedList
    public function __construct()
    {
        $this->head = null;
    }

    //display the content of the list
    public function PrintList()
    {
        $temp = new Node();
        $temp = $this->head;
        if ($temp != null) {
            echo "The list contains: ";
            while ($temp != null) {
                echo $temp->data . " ";
                $temp = $temp->next;
            }
            echo "\n";
        } else {
            echo "The list is empty.\n";
        }
    }
};

$singlyLinkedList = new SinglyLinkedList();

//Add first node.
$first = new Node();
$first->data = 10;
$first->next = null;
$singlyLinkedList->head = $first;

//Add second node.
$second = new Node();
$second->data = 20;
$second->next = null;
$first->next = $second;

//Add third node.
$third = new Node();
$third->data = 30;
$third->next = null;
$second->next = $third;

$singlyLinkedList->PrintList();
