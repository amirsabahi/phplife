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
    public $top = null;
    public $buttom = null;
    private $length = 0;
    public function peek()
    {
        return $this->top;
    }

    public function push($value)
    {
        $node = new Node($value);
        if($this->length === 0)
        {
            $this->top = $node;
            $this->buttom = $node;
        } else {
            $currentNode = $this->top;
            $this->top = $node;
            $this->top->next = $currentNode;
        }
        $this->length++;
        return $this;
    }

    public function pop() 
    {
        if(is_null($this->top)) 
        {
            return null;
        }
        $topValue = $this->top->value;
        $this->top = $this->top->next;
        if($this->length == 0)
        {
            $this->buttom =null;
        }
        $this->length--;
        return $topValue;
    }

}

$stack = new Stack();
$stack->push("A");
$stack->push("B");
$stack->push("C");

var_dump($stack->pop());
var_dump($stack->peek());