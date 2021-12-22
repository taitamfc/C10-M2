<?php
class Queue {
    private $limit;
    private $queue = [];

    public function __construct( $ts_limit ){
        $this->limit = $ts_limit;
    }
    //lưu giữ một phần tử trên hang doi
    //Goi y: dua phan tu vao mang
    public function enqueue($item){
        array_push($this->queue, $item);
    }
    //lưu giữ một phần tử trên hang doi
    //Goi y: xoa phan tu dau tien cua mang
    public function dequeue(){
        array_shift($this->queue);
    }
    //lấy phần tử dữ liệu ở trên cùng của hang doi, mà không xóa phần tử này.
    //tra ve phan tu dau tien cua mang
    public function peek(){
        return current($this->queue);
    }
    //kiem tra xem stack co rong hay khong
    public function isEmpty(){
        if (count($this->queue) == 0) {
            return true;
        }
        return false;
    }
    //kiem tra xem stack co day hay khong
    public function isFull(){
        if (count($this->queue) == $this->limit) {
            return true;
        }
        return false;
    }
}

//khoi tao doi tuoreturn current($this->stack);ng
$queue = new Queue(3);
//goi phuong thuc enqueue 3 lan: Trang, Do, Vang
$queue->enqueue("trang");
$queue->enqueue("do");
$queue->enqueue("vang");

//Goi phuong thuc peek de xem gia tri la Bi Trang
echo $queue->peek();
//Goi phuong thuc dequeue de lay vien Bi Trang tu hop
// $queue->dequeue();
//Goi phuong thuc isEmpty de xem co rong hay ko
var_dump ($queue->isEmpty());
//Goi phuong thuc isFull de xem co day hay ko
var_dump ($queue->isFull());

echo "<pre>";
print_r($queue);
echo "</pre>";
