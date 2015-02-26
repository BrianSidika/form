
<?php
$id = $_GET['id_no'];
$connection = new mysqli('localhost','root','','employees');
if($connection->connect_error){
	echo "Could not connect due to an error"; exit;
}
?>
<?php
$sql = "DELETE FROM empoyes_details WHERE id_no=$id";
$result = $connection->query($sql);

if ($connection->query($sql) === TRUE) {
    echo "Record deleted successfully <a href='display_data.php'>Go Back</a>";
} else {
    echo "Error deleting record: " . $connection->error;
}

$connection->close();

?>