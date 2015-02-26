<?php
session_start();
if(!isset($_SESSION['is_logged_id'])){
	header('Location: index.php');
}

?>
<style>
table,td,th{
border:1px solid black;
border-collapse:collapse;
}
</style>
<pre>
<h1>Hello there <?php echo $_SESSION['logged_in_user']; ?></h1>
<?php
$connection = new mysqli('localhost','root','','employees');
if($connection->connect_error){
	echo "Could not connect due to an error"; exit;
}
$sql = "SELECT * FROM empoyes_details";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
	echo "<table>";
	echo "<tr><th>First Name</th>
	<th>Last Name</th>
	<th>ID No.</th>
	<th>Gender</th>
	<th>Residence</th>
	<th>Age</th><th>
Operations</th></tr>";
    // output data of each row
    while($record = $result->fetch_assoc()) {
	$curent_date = new DateTime();
	$dob = new DateTime($record["dob"]);
	$date_diff = date_diff($curent_date, $dob);
	
        echo "<tr><td> " . $record["FName"]. "</td>
		<td>" . $record["LName"]. "</td> 
		<td>" . $record["id_no"]. "</td>
		<td>" . $record["gender"]."</td>
		<td>" .$record["residence"]."</td>
		<td>" . $date_diff->y." years ".$date_diff->d. " days</td>
		<td><a href='update_data.php?id_no=". $record["id_no"] ."'><img style='width:25px' src='edit.jpg'/></a>
		<a href='delete_data.php?id_no=". $record["id_no"] ."'><img style='width:25px' src='delete.jpg'/></a></td></tr>";
		
    }
	echo "</table>";
}
function age($year_of_birth)
	{
		$age = date("Y") - $year_of_birth;
		return $age--;

	}


$connection->close();

?>