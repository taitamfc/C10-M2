<?php
$arr = ["An","Tuan","Thuy","Ngan","Thuy"];
        //0    1      2      3      4
// foreach( $arr as $k => $member ){
//     //so sanh neu member == Tuan

// }
$x = "Thuy";
for( $i = 0; $i < count($arr); $i++ ){
    if( $arr[$i] == $x ){
        echo $x . " duoc tim thay tai vi tri ".$i." <br>";
    }
}