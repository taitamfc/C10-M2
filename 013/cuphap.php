<?php
error_reporting(-1);
ini_set('display_errors', 'On');

try {
    $firstNumber    = 5;
    $secondNumber   = 1;
    if( $secondNumber == 1 ){
        throw new Exception("Second number is zero");
        throw new Exception("So thu 2 bang khong");
    }

    $result = $firstNumber / $secondNumber;

    echo "Result is :".$result;

} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo "Finally";
}

