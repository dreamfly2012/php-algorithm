<?php

//二叉搜索树 

class Node
{

    public $data;

    public $left = null;

    public $right = null;

    public function __construct($data)
    {
        $this->data = $data;
    }
}

//[1,2,3,4,5,6] 

class BST
{

    public $root;

    public function add(Node $node)
    {
      
        if (empty($this->root)) {
            $this->root = $node;
        } else {
            if($node->data < $this->root->data){
                $this->putLeft($this->root, $node);
            }else {
                $this->putRight($this->root, $node);
            }
        }
    }

    public function putLeft(Node $current, Node $node)
    {
        if (empty($current->left)) {
            $current->left = $node;
        } else {
            if ($node->data < $current->left->data) {
                $this->putLeft($current->left, $node);
            } else {
                $this->putRight($current->left, $node);
            }
        }
    }

    public function putRight(Node $current, Node $node)
    {
        if (empty($current->right)) {
            $current->right = $node;
        } else {
            if($node->data < $current->right->data){
                $this->putLeft($current->right, $node);
            } else {
                $this->putRight($current->right, $node);
            }
        }
    }

    public function midTraversal(Node $node)
    {
        if($this->hasLeft($node)){
            $this->midTraversal($node->left);
        }
        
        var_dump($node->data);
        if($this->hasRight($node)){
            $this->midTraversal($node->right);
        }
        
        
    }

    public function getRoot()
    {
        return $this->root;
    }

    public function print(Node $node)
    {
        var_dump($node->data);
    }

    public function hasLeft(Node $node)
    {
        if(empty($node->left)){
            return false;
        }else{
            return true;
        }
    }

    public function hasRight(Node $node)
    {
        if (empty($node->right)) {
            return false;
        } else {
            return true;
        }
    }
}

$bst = new BST();

$node = new Node(8);
$bst->add($node);


$node = new Node(3);
$bst->add($node);




$node = new Node(10);
$bst->add($node);



$node = new Node(5);
$bst->add($node);

$node = new Node(2);
$bst->add($node);

print_r($bst->root);


$bst->midTraversal($bst->root);

