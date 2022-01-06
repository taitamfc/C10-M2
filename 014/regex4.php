<?php
//dung preg_replace de xoa toan bo email trong chuoi thanh khoang trang
$string = "xin chao test1@gmail.com va test2@gmail.com";

$partern = '/\w{1,}\@[a-z]{1,}\.[a-z]{1,}/';

$string = preg_replace($partern, "", $string);

echo $string;