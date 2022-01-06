<?php
    $arr = [5, 6, 8, 11, 22, 44, 33];
        //  0   1  2  3   4   5    6
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) { 
        for ($j = $n - 1; $j > $i; $j--) { 
            /*
            $arr[$j];           //33
            $t = $arr[$j-1];    //44
            $arr[$j-1] =$arr[$j]-  44 => 33
            $arr[$j] = $t;      -  33 => 44
            */
            if( $arr[$j] < $arr[$j-1] ){
                $t = $arr[$j-1];
                $arr[$j-1] = $arr[$j];
                $arr[$j] = $t;
            }
        }
    }

    echo '<pre>';
    print_r($arr);
    die();

