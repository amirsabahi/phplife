<?php
// Definition for a singly-linked list.
  class ListNode {
     public $val = 0;
      public $next = null;
      function __construct($val = 0, $next = null) {
          $this->val = $val;
         $this->next = $next;
     }
 }
 
$node2 = new ListNode(4);
$node3 = new ListNode(2, $node2);
$node4 = new ListNode(1, $node3);
$list1 = $node4;

$node22 = new ListNode(4);
$node32 = new ListNode(3, $node22);
$node42 = new ListNode(1, $node32);
$list2 = $node42;

$dummy = new ListNode();
$res = $dummy;
while($list1)
{
    $res->next = $list1;
    echo "\n Value is $list1->val \n";
    echo "\nBefore\n";
    Var_dump($res);
    $res = $res->next;
    echo "\nAfter\n";
    Var_dump($res);
    echo "\nDummy is\n";
    Var_dump($dummy);
    echo "\n-----------\n";
    $list1=$list1->next;
    echo "\n------ END OF LOOP -----\n";
    
}
echo "\n----------- FINAL RESULT -----------\n";
var_dump($dummy->next);
echo "\n----------- ************ -----------\n";