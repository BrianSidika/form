<html>

<head>
  <link href="format.css" rel="stylesheet">
  
</head>
<body>
<form id='register' action='register.php' method='post'
    accept-charset='UTF-8'>
<fieldset >
<legend>Register</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/> <br>
<label for='name' >User Name*: </label> <br> 
<input type='text' name='username' id='name' maxlength="50" /> <br> <br>

<label for='fname' >First Name*:</label> <br>
<input type='text' name='fname' id='fname' maxlength="50" /> <br><br>
 
<label for='lname' >Last Name*:</label> <br>
<input type='text' name='lname' id='lname' maxlength="50" /> <br><br>

<label for='residence' >Residence*:</label> <br>
<input type='text' name='residence' id='residence' maxlength="50" /> <br><br>
 
<label for='password' >Password*:</label> <br>
<input type='password' name='password' id='password' maxlength="50" /> <br> <br><br>
<input type='submit' name='Submit' value='Submit' /> <br> <br>

 </body>
</fieldset>
</form>
</html>

<?php

$connection = new mysqli('localhost','root','','employees');
if($connection->connect_error){
	echo "Could not connect due to an error"; exit;
}
?>
<?php

$connection = new mysqli('localhost','root','','employees');
if($connection->connect_error){
	echo "Could not connect due to an error"; exit;
}
$sql = "INSERT INTO users (username, fname, lname, residence, password )
VALUES ( '$emp_name','$emp_address',$emp_salary'        'JDoe','John', 'Doe', 'Nairobi','123456789')";

if ($connection->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();
?>