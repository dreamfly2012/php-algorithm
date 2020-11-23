<?php


class Node
{
    public $data;
    public $next = null;
    public function __construct($data)
    {
        $this->data = $data;
    }
}

class SingleList
{
    public $head = null;
    public $length = 0;
}

//1->2->3->4->5->3
$node1 = new Node(1);
$node2 = new Node(2);
$node3 = new Node(3);
$node4 = new Node(4);
$node5 = new Node(5);

$node1->next = $node2;
$node2->next = $node3;
$node3->next = $node4;
$node4->next = $node5;
$node5->next = $node2;

//print_r($node1);

function hasRing($head)
{
    if($head==null||$head->next==null){
        return false;
    }

    $p1 = $head;
    $p2 = $head->next;
    while($p1!=null&&$p2!=null){
        $p1 = $head->next;
        $p2 = $p2->next->next;
        if ($p1 == $p2) {
            return true;
        }
    }

    return false;
}

var_dump(hasRing($node1));
