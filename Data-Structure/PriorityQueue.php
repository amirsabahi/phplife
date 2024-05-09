<?php
class Element
{
    public $value;
    public $priority;
    public function __construct($value, $priority)
    {
        $this->value = $value;
        $this->priority = $priority;
    }
}

class PriorityQueue 
{
    public $items = [];

    function enqueue($value, $priority)
    {
        for($i=0; $i<count($this->items); $i++)
        {
            if($this->items[$i]->priority > $priority)
            { 
                array_splice($this->items, $i, 0 ,[new Element($value, $priority)]);
                return true;
            }
        }

        array_push($this->items,  new Element($value, $priority));
        return true;
    }
    function dequeue()
    {
        if(count($this->items) == 0)
            return false;
        return array_shift($this->items);
    }
    function first()
    {
        if(count($this->items) == 0)
            return false;
        return $this->items[0];
    }

    function last()
    {
        if(count($this->items) == 0)
            return false;
        return $this->items[count($this->items)-1];
    }
}


$queue = new PriorityQueue();
$queue->enqueue("P1", 3);
$queue->enqueue("P2", 2);
$queue->enqueue("P3", 10);
$queue->enqueue("P6", 1);
var_dump($queue->dequeue("P3", 1)->value);

echo "\n****************\n";
var_dump($queue->items);
