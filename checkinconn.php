<?php
$x=$_POST['fname'];
$y=$_POST['lname'];
$z=$_POST['email'];
$a=$_POST['contactno'];
$b=$_POST['ccn'];
$c=$_POST['room_number'];
$d=$_POST['checkin'];
$e=$_POST['checkout'];
$f=$_POST['type'];
$g=$_POST['rooms'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_management";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql = "INSERT INTO occupancy (firstname, lastname, email, contact_number, ccn, room_number, check_in, check_out, room_type, number_of_rooms)
 VALUES ('$x','$y','$z','$a','$b','$c','$d','$e','$f','$g')";
if ($conn->query($sql) === TRUE){
	echo "\nNew record created successfully";
  header("Location: admindisplay.php");
} else{
	echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();

?>
