<?php
error_reporting(-1);
ini_set('display_errors', 'On');

$arr = [9, 6, 8, 11, 22, 44, 33];
//           0  1   2   3   4  5  6   7   8   9  10
for ($i = 1; $i < count($arr); $i++) {
    //gán $arr[$i] cho biến trung gian temp // $arr[$i] = 6
    $temp = $arr[$i]; //temp = 6
    //khởi tạo biến $j = $i - 1
    $j = $i - 1; //$j = 1 - 1 = 0
    //trường hợp khi $j >=0 và giá trị $arr[$j] > biến trung gian temp
    while ($j >= 0 && $arr[$j] > $temp) { //($j>=0 và giá trị 8($arr[$j]) > 6($temp))
        //$arr[$j + 1] = $arr[$j];
        //$arr[1]    = 6
        //$arr[0]    = $temp(6);
        $arr[$j + 1] = $arr[$j];
        $j--; // để kiểm tra trường hợp tiếp theo, khi $j = 0(tức ở vị trí index = 0) thì dừng
    }
    //lúc temp mang giá trị 8(lớn hơn giá trị của vị trí bên trái)
    // thực hiện gán giá trị liền kề = temp
    $arr[$j + 1] = $temp;
}

foreach ($arr as $key => $value) {
    echo $value . " ";
}