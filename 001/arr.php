<?php
$books_1 	= ["Hóa","Toán","Lý"];
$books_2 	= ["Văn","Sử","Địa"];
$books_3 	= array_merge($books_1,$books_2);

echo "<pre>";
print_r($books_3);
echo "</pre>";