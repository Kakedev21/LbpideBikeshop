<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	// Database connection
	$conn = new mysqli('localhost','root','','accountdb');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into usermessage(name, email, message) values(?, ?,?)");
		$stmt->bind_param("sss", $name, $email, $message);
		$execval = $stmt->execute();
		echo $execval;
		echo"Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>