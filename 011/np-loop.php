<?php
//mang da duoc sap xep truoc khi tim kiem
//khong sap xep thi ko thuc hien duoc tim kiem nhi phan
$arr = [ 5 , 6, 9, 15, 18, 19, 33, 35, 44, 47];
    //   0   1  2   3   4   5   6   7   8   9
    //                      |

$find   = 33;
$left   = 0;
$right  = count($arr) - 1;//10 - 1 = 9

while( $left <= $right ){
    $mid    = floor( ( $left + $right ) / 2 ); // 6

    if( $arr[$mid] > $find ){
        $right = $mid - 1; 
    }elseif( $arr[$mid] < $find ){
        $mid = $mid + 1;//5
        $left = $mid ;//5
    }else{
        echo "Tim thay $find tai vi tri $mid";
        die();
    }
}

    

