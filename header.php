<?php
session_start();
?>
<html>
<head>
<style>
h1{
     background-color:linen;
    color:pink;
	}
	body{
	background-color:linen;
	color:#696969;
	font-color:blue;
	}
</style>
<head>
<body>
<div>
<img src="header.jpg"/>
<?php

if(isset($_SESSION['is_logged_id'])){
	echo "<A HREF = 'logout.php'>Log out</A>";
}
?>
<div>