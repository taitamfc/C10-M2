<?php
class Stack {
    private $limit;
    private $stack = [];

    public function __construct( $ts_limit ){
        $this->limit = $ts_limit;//3
    }
    //lưu giữ một phần tử trên ngăn xếp
    //Goi y: dua phan tu vao mang
    public function push($item){
        if( $this->isFull() ){
            echo 'Stacl is full';
        }else{
            array_unshift($this->stack,$item);
        }
        
    }
    //lưu giữ một phần tử trên ngăn xếp
    //Goi y: xoa phan tu dau tien cua mang
    public function pop(){
        if( $this->isEmpty() ){
            echo 'Stack is empty';
        }else{
            array_shift($this->stack);
        }
    }
    //lấy phần tử dữ liệu ở trên cùng của ngăn xếp, mà không xóa phần tử này.
    //tra ve phan tu dau tien cua mang
    public function peek(){
        return current($this->stack);
    }
    //kiem tra xem stack co rong hay khong
    public function isEmpty(){
        if(count($this->stack) == 0){
            return true;
        }else{
            return false;
        }
    }
    //kiem tra xem stack co day hay khong
    public function isFull(){
        if (count($this->stack) == $this->limit){
            return true;
        }else{
            return false;
        }
    }
}

//khoi tao doi tuong
$stack = new Stack(3);
//goi phuong thuc push 3 lan: Trang, Do, Vang
$stack->push('trang');
$stack->push('do');
$stack->push('vang');

//Goi phuong thuc peek de xem gia tri la Bi Vang
echo $stack->peek();
echo '<br>';
//Goi phuong thuc pop de lay vien Bi Vang tu hop
// $stack->pop();
//Goi phuong thuc isEmpty de xem co rong hay ko
var_dump($stack->isEmpty());
echo '<br>';
//Goi phuong thuc isFull de xem co day hay ko
var_dump($stack->isFull());
echo '<br>';
echo '<pre>';
print_r($stack);
die();