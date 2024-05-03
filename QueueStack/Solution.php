<?php
class MyQueue {
    /**
     */
    private $stack1= [];
    private $stack2= [];
    function __construct() {
        
    }
  
    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        array_push($this->stack1, $x);
        return null;
    }
  
    /**
     * @return Integer
     */
    function pop() {
        if(count($this->stack1) == 1) 
        {
            return array_pop($this->stack1);
        }
        $count = 1;
        while($count < count($this->stack1))
        {
            $value = array_pop($this->stack1);
            array_push($this->stack2, $value);
        }
        $returValue =  array_pop($this->stack1);
        while(count($this->stack2) !=0)
        {
            array_push($this->stack1, array_pop($this->stack2));
        }

        return $returValue;

    }
  
    /**
     * @return Integer
     */
    function peek() {
        return $this->stack1[0] ?? null;
    }
  
    /**
     * @return Boolean
     */
    function empty() {
        if(count($this->stack1) == 0) 
        {
            return true;
        }
        return false;
    }
}

  $obj = new MyQueue();
  $obj->push(1);
  $obj->push(2);
  $ret_2 = $obj->pop();
  echo $ret_2;
  echo $ret_3 = $obj->peek();
  echo $ret_4 = $obj->empty();
 