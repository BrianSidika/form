<?php
require "header.php";

if(isset($_SESSION['is_logged_id'])){
	//require 'Login.php';
}else{
	require 'Login.php';
}

if(isset($_POST['Login'])){
	require 'db_conn.php';
	$passwd = md5($_POST['Password']);
	$username = $_POST['Username'];
	$sql = "select * from users where username='$username' and password='$passwd'";
	
	$result = $connection->query($sql);

	if ($result->num_rows != 1) {
		echo "Incorrect username or password";
		
		if(isset($_SESSION['is_logged_id'])){
	     require 'register.php';}
		
		
		exit;
	}else{
		$_SESSION['is_logged_id'] = true;
		while($record = $result->fetch_assoc()) {
			$_SESSION['logged_in_user'] = $record['fname'] . " " . $record['lname'];
		}
		header('Location: display_data.php');
	}
}
?>

<A HREF = register.php> Click here to register </A>
</body>
</html>