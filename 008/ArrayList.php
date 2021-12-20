<?php
//khai bao lop
class ArrayList {
    //khai bao thuoc tinh
    private $data = [];

    //them 1 phan tu vao mang
    public function add($item){
        array_push($this->data,$item);
    }

    //them 1 phan tu vao vi tri
    public function addAtPos( $item, $index ){
        array_splice($this->data,$index,0,$item);
    }

    //xoa mot phan tu tai vi tri
    public function removeByIndex($index){
        //unset($this->data[$index]);
        array_splice($this->data,$index,1);
    }
    
    //kiem tra phan tu co trong mang hay ko ?
    public function contains($item){
        if (in_array ($item,$this->data)){
            return true;
        } else {
            return false;
        }
    }

    //lay ra gia tri cua phan tu
    public function get($index){
        return $this->data[$index];
    }

    //chuyen sang mang
    public function toArray(){
        return $this->data;
    }

    //tra ve kich thuoc cua danh sach
    public function size(){
        return sizeof($this->data);
    }

    //kiem tra danh sach co rong hay ko
    public function isEmpty(){
        if ( count($this->data) == 0 ) {
            return true;
        }else{
            return false;
        }
    }

    //unknow
    public function shiftItemsUp( $startIndex, $endIndex ){

    }
    //unknow
    public function shiftItemsDown( $startIndex, $endIndex ){
        
    }
}

//khoi tao doi tuong
$arraylist = new ArrayList();

//them mot phan tu vao mang
$arraylist->add('Nguyen Van A');
$arraylist->add('Nguyen Van B');    
$arraylist->add('Nguyen Van C');

//them 1 phan tu vao vi tri
$arraylist->addAtPos('Nguyen Van BD', 1);

/*
[0] => Nguyen Van A
[1] => Nguyen Van BD
[2] => Nguyen Van B
[3] => Nguyen Van C
*/
//xoa phan tu tai vi tri  1
$arraylist->removeByIndex(1);

//kiem tra NVA co trong mang hay khong
$arraylist->contains('Nguyen Van A');

//lay phan tu dua vao chi so
echo $arraylist->get(3);

//lay ra do dai cua danh sach
echo $arraylist->size();

echo '<pre>';
print_r($arraylist);
die();