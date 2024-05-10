<?php
// Definition for a binary tree node.
  class TreeNode {
      public $val = null;
      public $left = null;
      public $right = null;
      function __construct($val = 0, $left = null, $right = null) {
          $this->val = $val;
          $this->left = $left;
          $this->right = $right;
     }
 }
 
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer
     */
    public $stack = [];
    function traverse($root) {
        if (is_null($root)) {
            return 0;
        }
        $this->stack[] = $root;
        while(count($this->stack)>0) {
            $current = array_pop($this->stack);
            if($current->left)
                array_push($this->stack,$current->left );
            if($current->right)
                array_push($this->stack,$current->right );
              
        }
        var_dump($depth);
        
    }
}

$a = new TreeNode("a");
$b = new TreeNode("b");
$c = new TreeNode("c");
$d = new TreeNode("d");
$e = new TreeNode("e");
$f = new TreeNode("f");


$a->left = $b;
$a->right = $c;
$b->left = $d;
$b->right = $e;
$d->left = $f;

$solution = new Solution();
$solution->traverse($a);