<?php
$name = "Mai Chiem An Tuan";
//dung explode


//dung preg_split




die();

$ip = '197.168.0.1';
$arr = explode('.',$ip);

$partern = '/\./';

$arr2 = preg_split($partern,$ip);

echo '<pre>';
print_r($arr);
print_r($arr2);
die();

?>
