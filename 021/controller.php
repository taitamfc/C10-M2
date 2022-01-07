<?php
//model
include 'model.php';


// Controller
$product = get_product();
if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $TENHANG = $_REQUEST['TENHANG'];
    $MACONGTY   = 5;

    //Model
    them_mathang( $TENHANG, $MACONGTY );
}

//view
include_once 'view.php';
