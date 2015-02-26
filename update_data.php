<?php
session_start();
if(!isset($_SESSION['is_logged_id'])){
	header('Location: index.php');
}

?>
<h1>Hello there <?php echo $_SESSION['logged_in_user']; ?></h1>
<?php
$id= $_GET['id_no'];
$connection = new mysqli('localhost','root','','employees');
$sql = "SELECT * FROM empoyes_details WHERE id_no=$id";
$result = $connection->query($sql);
$f_name; $l_name; $id_no; $gender; $payroll_No; $emp_no; $dob;$residence;
if ($result->num_rows > 0) {
	while($record = $result->fetch_assoc()) {
		$f_name = $record["FName"];
		$l_name = $record["LName"];
		$id_no = $record["id_no"];
		$gender = $record["gender"];
		$payroll_No = $record["payroll_No"];
		$emp_no = $record["emp_no"];
		$dob = date('d-m-Y', strtotime($record["dob"]));
		$residence = $record["residence"];
	}
}
require_once 'form.php';


if(isset($_POST['submit'])){
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

	$sql = "UPDATE empoyes_details SET FName='$f_name', LName='$l_name', id_no=$ID_NO, emp_no=$emp_no,payroll_No='$payaroll_no', gender='$gender', residence='$residence', dob='$dob' where id_no =$id";
	if($connection->query($sql)===true){
		echo "Record successfully updated";
		
	} else {
		echo "Error: " . $sql . "<br>" . $connection->error;
	}
	$connection->close();
}
?>
