<?PHP

session_start();
session_destroy();
?>

<?php
session_start();
if(!isset($_SESSION['is_logged_id'])){
	header('Location: index.php');
}

?>