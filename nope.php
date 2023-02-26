<?php
session_start();
	$con = new mysqli('localhost','root','');

	mysqli_select_db($con,'accountdb');

    $username = $_POST['username'];
	$password = $_POST['password'];

	$s = "select * from userdata where username = '$username' && password = '$password'";

	$result = mysqli_query($con, $s); 

	$num = mysqli_num_rows($result);

	if($num == 1){
		$_SESSION['username'] = $username;
		header('location: index.php');
	}
	else{
		$_SESSION['username'] = 'guest';
		echo "invalid";
	}

?>