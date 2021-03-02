<?php
$x=$_POST['fname'];
$y=$_POST['lname'];
$z=$_POST['email'];
$a=$_POST['city'];
$b=$_POST['message'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_management";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql = "INSERT INTO enquire (firstname, lastname, email, city, message)
 VALUES ('$x','$y','$z','$a','$b')";
if ($conn->query($sql) === TRUE){
	echo "\nNew record created successfully";
  header("Location: index.php");
} else{
	echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();

?>
