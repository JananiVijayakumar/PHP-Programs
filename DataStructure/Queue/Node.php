<?php

/**
 * php program for 
 * Implementing Queue using Linked List
 */
class Node
{
    public $data;
    public $next;
    public function __construct($value)
    {
        $this->data = $value;
        $this->next = NULL;
    }
}
