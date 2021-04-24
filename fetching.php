<?php
$servername = "localhost";   
$username = "test";			 
$password = "1234";   
$dbname = "raspi";			 
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = mysqli_query($conn,"SELECT * FROM reading ORDER BY sno DESC LIMIT 1");
$print_data = mysqli_fetch_row($sql);
echo $print_data[1];
?>