<?php
$f_name = $_POST['FName'];
$l_name = $_POST['LName'];
$ID_NO = $_POST['id_no'];
$emp_no = $_POST['emp_no'];
$gender = $_POST['gender'];
$residence = $_POST['residence'];
$payaroll_no = $_POST['payaroll_no'];
$dob = $_POST['dob'];
$dob_array = explode('-',$dob);

$errors = array();
if(count($dob_array) !=3){
	$errors['dob']= "Invalid DOB value";
}else{
	$dob = $dob_array[2]."-".$dob_array[1]."-". $dob_array[0];
}




if(!ctype_alpha($f_name)){
	$errors['fname']= "Invalid First Name value";
}

if(count($errors)>0){
	foreach($errors as $error){
		echo $error ."<br/>";
	}
	exit;
}


$connection = new mysqli('localhost','root','','employees');
if($connection->connect_error){
	echo "Could not connect due to an error"; exit;
}
$sql = "INSERT INTO empoyes_details VALUES('$f_name', '$l_name', $ID_NO, $emp_no,'$payaroll_no', '$gender', '$residence', '$dob',null)";
if($connection->query($sql)===true){
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
$connection->close();

?>