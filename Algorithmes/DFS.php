<?php
class node {
    public $value;
    public $rightNode = null;
    public $leftNode =  null;
    public function __construct($value) {
        $this->value = $value;
    }
}

class DFC {
    public $root;
    public function __construct(mixed $rootValue) {
        $this->root = $rootValue;
    }

    public function traverse(mixed $rootNode) {
        if($rootNode == null) {
            return [];
        }
        
        $left = self::traverse($rootNode->leftNode);
        $right = self::traverse($rootNode->rightNode);
        $result = [];
        array_push($result, $rootNode->value);
        array_push($result, $left);
        array_push($result, $right);
        return $result;
    }
}

$a = new Node("a");
$b = new Node("b");
$c = new Node("c");
$d = new Node("d");
$e = new Node("e");
$f = new Node("f");

$dfs = new DFC($a);
$a->leftNode = $b;
$a->rightNode = $c; 
$b->leftNode = $d;
$b->rightNode = $e;
$c->leftNode = $f;

var_dump( $dfs->traverse($a));