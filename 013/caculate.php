<?php
error_reporting(-1);
ini_set('display_errors', 'On');

$firstNumber    = 0;
$secondNumber   = 0;

try {
    //

    $total = $firstNumber + $secondNumber;//0

    if( $total === 0){
        throw new Exception("The total is zero");
    }

    $total = 10 / $total;

    echo $total;
    
} catch (Exception $e) {
    echo $e->getMessage();
}