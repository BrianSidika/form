<?php
session_start();

if(isset($_SESSION['is_logged_id'])){
	echo "Here";
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
		echo "Incorrect username or password";exit;
	}else{
		$_SESSION['is_logged_id'] = true;
		while($record = $result->fetch_assoc()) {
			$_SESSION['logged_in_user'] = $record['fname'] . " " . $record['lname'];
		}
		header('Location: display_data.php');
	}
}
?>