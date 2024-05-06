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

    function enqueu($value, $priority)
    {
        for($i=0; $i<count($this->items); $i++)
        {
            echo "\n$i-------------\n";
            var_dump($this->items);
            echo "\n---------------\n";
            if($this->items[$i]->priority > $priority)
            { 
                array_splice($this->items, $i, 0 ,[new Element($value, $priority)]);
                echo "\nINSERTed-------------\n";
                var_dump($this->items);
                echo "\n---------------\n";
                return true;
            }
        }

        array_push($this->items,  new Element($value, $priority));
        return true;
    }
}


$queue = new PriorityQueue();
$queue->enqueu("P1", 3);
$queue->enqueu("P2", 2);

$queue->enqueu("P3", 10);


echo "\n****************\n";
var_dump($queue->items);