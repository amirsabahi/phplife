<?php

class Node
{
    public $value;
    public $left;
    public $right;
    function __construct($value)
    {
            $this->value = $value;
            $this->left = null;
            $this->right = null;
    }
}


class BinarySearchTree
{
    private $root = null;
    function __construct()
    {
        $this->root = null;
    }

    function insert($value)
    {
        if(is_null($this->root))
        {
            $this->root =  new Node($value);
            return $this;
        }  
        $currentNode = $this->root;
        $next = $this->root;
        while($next != null )
        {
            $currentNode = $next;
            if($value < $next->value)
            {
                $next = $next->left;
            } else 
            {
                $next = $next->right;
            }
        }

        if($value < $currentNode->value)
        {
            $currentNode->left = new Node($value);  
        } else 
        {
            $currentNode->right = new Node($value);  
        }

        return $this;
    }

    function lookup($value)
    {
        $result = false;
        if(is_null($this->root))
        {
            return $result;
        } 
        if($this->root->value < $value)
        {
            $next = $this->root->right;
        } else 
        {
            $next = $this->root->left;
        }
        while($next != null)
        {
            if($value == $next->value)
            {
                $result = $next;
                break;
            }
            if($value < $next->value)
            {
                $next = $next->left;
            } else 
            {
                $next = $next->right;
            }
        }

        return $result;
    }
}


$bts = new BinarySearchTree();
$bts->insert(9);
$bts->insert(4);
$bts->insert(6);
$bts->insert(20);
$bts->insert(170);
$bts->insert(15);
$bts->insert(1);
var_dump($bts->lookup(4));
echo "\n------------------------\n"
var_dump($bts);

