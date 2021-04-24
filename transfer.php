<?php
$servername = "localhost";   
$username = "test";			 
$password = "1234";   
$dbname = "raspi";			 
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO reading (status) VALUES ('$_POST[name]')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>