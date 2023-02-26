<?php
session_start();
	$con = new mysqli('localhost','root','');
    header('location: account.php');
	mysqli_select_db($con,'accountdb');

    $username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$s = "select * from userdata where username = '$username'";

	$result = mysqli_query($con, $s); 

	$num = mysqli_num_rows($result);

	if($num == 1){
		echo "Already Taken";
	}
	else{
		$reg = "insert into userdata(username, password, email) values ('$username', '$password', '$email')";
		mysqli_query($con,$reg);
		echo"Success";
	}

?>