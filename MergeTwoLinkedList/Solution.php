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

function mergeTwoLsit($l1, $l2)
{
    $dummy = new ListNode();
    $result = $dummy;
    while($l1 !== null && $l2 !=null)
    {
        if($l1->val< $l2->val)
        {
            $result->next = $l1;
            $l1 = $l1->next;
        } else 
        {
            $result->next = $l2;
            $l2 = $l2->next;
        }
        $result = $result->next;
    }
    if($l1) 
    {
        $result->next = $l1;
    } else if($l2)
    {
        $result->next = $l2;
    }
    return $dummy->next;
}


$result = mergeTwoLsit($list1, $list2);
while($result !=  null) 
{
    echo "\n".$result->val;
    $result = $result->next;
}