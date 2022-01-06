<?php
error_reporting(1);
ini_set('display_errors', 'On');

$pattern = '/[a-z]{4}\_\d{3,5}\@[a-z]{5}\.[a-z]{3}/';

$string = 'tuan_123@gmail.com';

$check = preg_match($pattern,$string);

if( $check ){
    echo 'Ban da nhap dung email';
}else{
    echo 'Vui long nhap dung dinh dang';
}

var_dump($check);
die();