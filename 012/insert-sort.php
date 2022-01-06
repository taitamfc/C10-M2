<?php
error_reporting(-1);
ini_set('display_errors', 'On');

function insert_sort_jame($myArray){
    for ($i = 0; $i < count($myArray); $i++) {
        echo '<br> i la: '.$i;
        $val = $myArray[$i];
        $j = $i - 1;
        while ($j >= 0 && $myArray[$j] > $val) {
           
            $myArray[$j + 1] = $myArray[$j];
            $j--;
            echo '<br> k la '.$j;
        }
        $myArray[$j + 1] = $val;
    }
    return $myArray;
}

function insert_sort_youtu($A){
    for ($i = 1; $i < count($A); $i++) {
        echo '<br> i la: '.$i;
        $j = $i - 1;
        $t = $A[$i];
        while ( $t < $A[$j] && $j >= 0 ) {
            
            $A[$j + 1] = $A[$j];
            $j--;
            echo '<br> k la '.$j;
        }
        $A[$j + 1] = $t;
    }
    return $A;
}

$arr = [9, 6, 8, 11, 22, 44, 33];

$arr_1 = insert_sort_jame($arr);
// echo '<hr>';
//$arr_2 = insert_sort_youtu($arr);

// echo '<pre>';
// print_r($arr_1);
// print_r($arr_2);

