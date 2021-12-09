<?php
	//kiem tra nguoi da submit form hay chua
	if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
		//kiem tra gia tri dau vao
		// echo "<pre>";
		// print_r($_REQUEST);
		// echo "</pre>";

		//lay gia tri nhap vao, luu vao bo nho
		$description 	= $_REQUEST['description'];
		$price 			= $_REQUEST['price'];
		$percent 		= $_REQUEST['percent'];

		//xu ly
		/*
		Discount Amount = List Price * Discount Percent * 0.1 
		*/

		$discount_amount = $price * $percent * 0.1;


		//xuat
		echo $discount_amount;
	}
?>
<form action="" method="POST">
	Product Description: <input type="text" name="description"> <br>
	List Price: <input type="text" name="price"> <br>
	Discount Percent: <input type="text" name="percent">

	<input type="submit" name="submit" value="Tinh Toan">

</form>