<?php
$servername = "localhost";   
$username = "test";			 
$password = "1234";   
$dbname = "raspi";			 
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
<html>
<body>
<h1>Raspi Audio Record</h1>
<form action = "transfer.php" method="post">
<input type="text" name="name" ><br><br>
<button type="submit">press me</button>

</form>
</body>
</html>