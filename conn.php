<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employees";


// Create connection
$conn = new mysqli($servername, $username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "CREATE DATABASE employee";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$sql="CREATE TABLE users (
id INT(5),
fname VARCHAR(10) NOT NULL,
lname VARCHAR(10) NOT NULL,
residence VARCHAR(15),
password VARCHAR(20)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "INSERT INTO users (id,fname, lname, residence, password)
VALUES ('2', 'Brian', 'sidika','Mnarani','757575')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
