<?php
error_reporting(1);
ini_set('display_errors', 'On');

function tinh_chia($ts_a,$ts_b){
    if( $ts_b == 0 ){
        throw new Exception("Second number is zero");
    }
    return $ts_a / $ts_b;
}

try {
    echo "ket qua la:". tinh_chia(5,0);
} catch (Exception $e) {
    echo $e->getMessage();
}