<?php



if( $_SERVER['REQUEST_METHOD'] == 'POST' ){

	$username 	= $_REQUEST['username'];
	$age 		= $_REQUEST['age'];

	$file = $_FILES['file']['tmp_name'];
	$path = "images/".$_FILES['file']['name'];
	move_uploaded_file($file, $path);


	echo $username;
	echo '<br>';
	echo $age;
}



?>

<form action="" method="POST" enctype="multipart/form-data">
	Tài Khoản <input type="text" name="username"> <br>
	Avatar <input type="file" name="file"> <br>
	Mật Khẩu <input type="password" name="age"> <br>

	<button type="submit">Gui</button>
</form>