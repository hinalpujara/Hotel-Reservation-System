<?php
session_start();
?>

<?php

$_SESSION["x"]=$_POST['checkin'];
$_SESSION["y"]=$_POST['checkout'];
$_SESSION["z"]=$_POST['rooms'];
$_SESSION["a"]=$_POST['type'];
$_SESSION["b"]=$_POST['email'];
$_SESSION["d"]="Premium";
$_SESSION["e"]="Deluxe";
$_SESSION["f"]="Luxury";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_management";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
header("Location: payment.php");
$conn->close();

?>
