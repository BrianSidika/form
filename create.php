<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employees";

$conn = new mysqli('$servername','$username','$password','$dbname');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
	CREATE TABLE users (
id INT(5),
fname VARCHAR(10) NOT NULL,
lname VARCHAR(10) NOT NULL,
residence VARCHAR(15),
password VARCHAR(20)

)
$sql = "INSERT INTO users (id,fname, lname, residence, password)
VALUES ('1', 'Ben', 'Momanyi','kilifi','mine12345')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}