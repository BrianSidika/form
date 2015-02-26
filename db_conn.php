<?php
$connection = new mysqli('localhost','root','','employees');
if($connection->connect_error){
	echo "Could not connect due to an error"; exit;
}

?>