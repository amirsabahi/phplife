<?php

class Node
{
    public $value = null;
    public $next = null;

    public function __construct($value)
    {
        $this->value = $value;
    }
}

class Stack
{
    public $first = null;
    public $last = null;
    private $length = 0;
    public function peek()
    {
        return $this->first;
    }

    public function enqueue($value)
    {
        $node = new Node($value);
        if($this->length === 0)
        {
            $this->first = $node;
            $this->last = $node;
        } else {
            $this->last->next = $node;
            $this->last = $node;
        }
        $this->length++;
        return $this;
    }

    public function dequeue() 
    {
        if($this->length == 0) 
        {
            return null;
        }

       $value = $this->first->value;
        $this->first = $this->first->next;
        $this->length--;
        return $value;
    }

}

$stack = new Stack();
$stack->enqueue("A");
$stack->enqueue("B");
$stack->enqueue("C");
$value = $stack->dequeue();
var_dump($value);
$value = $stack->dequeue();
var_dump($value);
$value = $stack->dequeue();
var_dump($value);
$value = $stack->dequeue();
var_dump($value); // NULL