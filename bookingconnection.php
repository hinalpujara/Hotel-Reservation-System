<?php
$x=$_POST['checkin'];
$y=$_POST['checkout'];
$z=$_POST['rooms'];
$a=$_POST['type'];
$b=$_POST['email'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_management";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql = "INSERT INTO booking_data (checkin, checkout, no_of_rooms, room_type, email)
 VALUES ('$x','$y','$z','$a','$b')";
if ($conn->query($sql) === TRUE){
	echo "\nNew record created successfully";
  header("Location: payment.php");
} else{
	echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();

?>
