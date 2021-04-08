<?php
$x=$_POST['checkin'];
$y=$_POST['checkout'];
$z=$_POST['rooms'];
$a=$_POST['type'];
$b=$_POST['email'];
$d="Premium";
$e="Deluxe";
$f="Luxury";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_management";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

if($a = $e){
  $sql = "UPDATE booking_date
  SET premium_availability = premium_availability - $z
  WHERE date_of_booking BETWEEN '$x' AND '$y'";
}
if($a = $e){
  $sql = "UPDATE booking_date
  SET deluxe_availability = deluxe_availability - $z
  WHERE date_of_booking BETWEEN '$x' AND '$y'";
}
if($a = $f)
{
  $sql = "UPDATE booking_date
  SET luxury_availability = luxury_availability - $z
  WHERE date_of_booking BETWEEN '$x' AND '$y'";
}

if ($conn->query($sql) === TRUE){
	echo "\nNew record created successfully";
  header("Location: payment.php");
} else{
	echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();

?>
