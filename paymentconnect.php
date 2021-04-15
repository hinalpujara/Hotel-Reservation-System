<?php
session_start();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_management";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$x =  $_SESSION["x"];
$y =  $_SESSION["y"];
$z =  $_SESSION["z"];
$a =  $_SESSION["a"];
$b =  $_SESSION["b"];
$d =  $_SESSION["d"];
$e =  $_SESSION["e"];
$f =  $_SESSION["f"];
$g = $_SESSION["price"];
echo "Connected successfully";
$sql1 = "INSERT INTO booking_data (checkin, checkout, no_of_rooms, room_type, email, price)
 VALUES ('$x','$y','$z','$a','$b',$g)";
 if ($conn->query($sql1) === TRUE){
 	echo "\nNew record created successfully";
   #header("Location: payment.php");
 } else{
 	echo "ERROR: " .$sql1. "<br>" . $conn->error;
 }
if($a == $d){

  $sql = "UPDATE booking_date
  SET premium_availability = premium_availability - $z
  WHERE date_of_booking BETWEEN '$x' AND '$y'";
}
if($a == $e){
  echo $z;
  $sql = "UPDATE booking_date
  SET deluxe_availability = deluxe_availability - $z
  WHERE date_of_booking BETWEEN '$x' AND '$y'";
}
if($a == $f)
{
  $sql = "UPDATE booking_date
  SET luxury_availability = luxury_availability - $z
  WHERE date_of_booking BETWEEN '$x' AND '$y'";
}
if ($conn->query($sql) === TRUE){
	echo "\nNew record created successfully";
  #header("Location: payment.php");
} else{
	echo "ERROR: " .$sql. "<br>" . $conn->error;
}

$conn->close();

?>
