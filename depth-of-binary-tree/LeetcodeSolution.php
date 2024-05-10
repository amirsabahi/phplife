<?php
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer
     */
    public $stack = [];
    function maxDepth($root) {
        if (is_null($root)) {
            return 0;
        }
       $left = $this->maxDepth($root->left) + 1;
       $right = $this->maxDepth($root->right) + 1;

       return ($left>$right) ? $left : $right;
    }
}