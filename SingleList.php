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

    //add
    public function add($data)
    {
        $node = new Node($data);

        if($this->head==null){
            $this->head = $node;
            $this->length++;
        } else {
            $current = $this->head;
            while($current->next!=null){
                $current = $current->next;
            }

            $current->next = $node;
            $this->length++;
        }
    }

    //search
    public function search($index)
    {
        if($index==1){
            return $this->head;
        }else{
            $current = $this->head;
            while($index>1){
                $current = $current->next;
                $index--;
            }
            return $current;
        }
    }

    //delete 1 2 3 4 5
    public function delete($index)
    {
        if($index==1){
            $this->head = $this->head->next;
            $this->length--;
        }else{
            $pre_node = $this->search($index - 1);
            $node = $this->search($index);
            $pre_node->next = $node->next;
            $this->length--;
        }
    }
}

$singleList = new SingleList();
$singleList->add(1);
$singleList->add(2);
$singleList->add(3);
$singleList->add(4);
$singleList->add(5);
#print_r($singleList);

$node = $singleList->search(3);
#print_r($node);

$singleList->delete(2);
print_r($singleList);

