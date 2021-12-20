<?php
class ListNode {
    public $data = null;
    public $next = null;

    public function __construct($data = null) {
        $this->data = $data;
    }
}

class LinkedList {
    private $_firstNode = null;
    private $_totalNodes = 0;

    public function insert($data = null)
    {
        $newNode = new ListNode($data);

        if ($this->_firstNode === null) {
            $this->_firstNode = $newNode;

        } else {
            $currentNode = $this->_firstNode;

            while ($currentNode->next !== null) {
                $currentNode = $currentNode->next;
            }


            $currentNode->next = $newNode;
        }
        $this->_totalNodes++;
        return TRUE;
    }

}

$BookTitles = new LinkedList();


$BookTitles->insert("Nguyen Van A");
$BookTitles->insert("Nguyen Van B");
$BookTitles->insert("Nguyen Van C");
$BookTitles->insert("Nguyen Van D");

echo '<pre>';
print_r($BookTitles);
echo '</pre>';
