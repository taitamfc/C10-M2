<?php
	//kiem tra nguoi da submit form hay chua
	if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
		//kiem tra du lieu da gui len dung hay chua
		// echo "<pre>";
		// print_r($_REQUEST);
		// echo "</pre>";

		//lay gia tri dau vao, luu vao bo nho
		$amount = $_REQUEST['amount'];
		$rate 	= $_REQUEST['rate'];
		$year 	= $_REQUEST['year'];

		//xu ly
		/*
		Giá trị Tương lai = Giá trị Hiện tại + (Giá trị Hiện tại * Lãi suất)
		*/
		$future_value = $amount + ( $amount * $rate );


		//xuat
		echo $future_value;

	}
?>
<form action="" method="POST">
	Inventment Amount: <input type="text" name="amount">	<br>
	Yearly Interest Rate: <input type="text" name="rate">	<br>
	Number of Years: <input type="text" name="year">	<br>
	<input type="submit" name="submit" value="Tinh Toan">
</form>