<?php 
$connection = new mysqli('localhost','root','','employees');
if($connection->connect_error){
	echo "Could not connect due to an error"; exit;
}
$year = date("Y");
$month = date("m");
$day = date("d");
$age = $year-$dob_year; // $age calculates the user's age determined by only the year

function age($year_of_birth)
	{
		$age = gmdate("Y") - $year_of_birth;
		return $age--;

	}

echo age("SELECT * FROM empoyes_details WHERE DATE = date("Y")");

?>