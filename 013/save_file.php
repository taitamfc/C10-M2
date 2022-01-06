<?php
error_reporting(-1);
ini_set('display_errors', 'On');
try {
    $data = ["Toan","Ly","Hoa"];
    $data = json_encode($data);
    $saved = file_put_contents('users1.json',$data);
    if( !$saved ){
        throw new Exception("Khong the luu data");
    }

    header("Location: users.php");
} catch (Exception $e) {
    echo $e->getMessage();
}