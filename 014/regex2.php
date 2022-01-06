<?php
$subject = "Chào mừng bạn đến với CodeGym. CodeGym - Hệ thống đào tạo lập trình hiện đại.";
$pattern = '/CodeGym/';

preg_match_all( $pattern,$subject,$matches );

echo '<pre>';
print_r($matches);