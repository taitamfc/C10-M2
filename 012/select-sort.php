<?php
    error_reporting(-1);
    ini_set('display_errors', 'On');

    //$arr = [5,  11 , 22 , 34, 40,  66, 88];
    $arr = [9,  6,   8,   11, 22,  44, 33];
        //  0   1     2   3    4   5  6
    

    for ($i=0; $i < count($arr) ; $i++) { 
        $min = $i;//$min = 0;

        //tim ra gia tri nho nhat
        for ($j = $i + 1; $j < count($arr); $j++) {
            if( $arr[$j] < $arr[$min] ){
                $min = $j;
            }
        }

        //swap
        $temp       = $arr[$i];
        $arr[$i]    = $arr[$min];
        $arr[$min]  = $temp;
    }

    echo '<pre>';
    print_r($arr);
    die();