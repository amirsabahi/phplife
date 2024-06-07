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
    function minDepth($root) {
         // Base case: if the root is null, return 0
        if ($root === null) {
            return 0;
        }

        // If the root doesn't have any children, return 1
        if ($root->left === null && $root->right === null) {
            return 1;
        }

        // If the left subtree is null, recursively calculate the depth of the right subtree
        if ($root->left === null) {
            return $this->minDepth($root->right) + 1;
        }

        // If the right subtree is null, recursively calculate the depth of the left subtree
        if ($root->right === null) {
            return $this->minDepth($root->left) + 1;
        }

        // If both left and right subtrees exist, recursively calculate the minimum depth
        $leftDepth = $this->minDepth($root->left);
        $rightDepth = $this->minDepth($root->right);
        return min($leftDepth, $rightDepth) + 1;
    }
}

$root = new TreeNode(3);
$root->left = new TreeNode(9);
$root->right = new TreeNode(20);
$root->right->left = new TreeNode(15);
$root->right->right = new TreeNode(7);

// Create an instance of the Solution class
$solution = new Solution();
// Call the minDepth function
$depth = $solution->minDepth($root);

// Output the result
echo "Output: $depth";