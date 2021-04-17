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
$_SESSION["premium"]=7500;
$_SESSION["deluxe"]=10000;
$_SESSION["luxury"]=15000;
if($_SESSION["a"] == $_SESSION["d"])
{
  $_SESSION["price"] = 7500*$_SESSION["z"];
}
if($_SESSION["a"] == $_SESSION["e"])
{
  $_SESSION["price"] = 10000*$_SESSION["z"];
}
if($_SESSION["a"] == $_SESSION["f"])
{
  $_SESSION["price"] = 15000*$_SESSION["z"];
}
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
