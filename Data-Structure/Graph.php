<?php

class Vertex
{
    public $value;
    public $edges = [];

    public function addEdge(Vertex $vertex)
    {
        array_push($this->edges, $vertex);
    }

    public function addBidirectionalEdge(Vertex $vertex)
    {
        foreach($this->edges as $edge)
        {
            if($edge === $vertex)
                return;
        }
        $this->addEdge($vertex);
        $vertex->addEdge($this);
    }
}

$alice = new Vertex();
$bob = new Vertex();
$cynthia = new Vertex();

$alice->addEdge($bob);
$alice->addEdge($cynthia);
$bob->addEdge($cynthia);
$cynthia->addEdge($bob);