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
$b =  $_SESSION["b"];
$z =  $_SESSION["z"];
$a =  $_SESSION["a"];
$g = $_SESSION["price"];
$premium = $_SESSION["premium"];
$deluxe = $_SESSION["deluxe"];
$lux = $_SESSION["luxury"];
echo $b;
$records = mysqli_query($conn,"SELECT * FROM booking_data WHERE email = '$b'");
$record1 = mysqli_query($conn,"SELECT * FROM user_data WHERE email = $b");
echo "Pinaki";
SELECT * FROM booking_data ORDER BY booking_id DESC LIMIT 1
while($row = mysqli_fetch_array($records))
{
	echo"
			<tr>
			<td>
			" .$row["booking_id"] . "
			</td>
			<td>
			" . $row["email"] . "
			</td>
			<td>
			" . $row["checkin"] . "
			</td>
			<td>
			" . $row["checkout"] . "
			</td>
			<td>
			" . $row["room_type"] . "
			</td>
			<td>
			" . $row["no_of_rooms"] . "
			</td>
			</tr>";
}
/*$sql = "SELECT * FROM booking_data WHERE email = $b";
$result = $conn->query($sql);
$sql1 = "SELECT * FROM user_data WHERE email = $b";
$result1 = $conn->query($sql1);*/

/*while($data = mysqli_fetch_array($records))
{
		echo "<div class='invoice-box'>
			<table cellpadding='0' cellspacing='0'>
				<tr class'top'>
					<td colspan='2'>
						<table>
							<tr>
								<td class='title'>
									<img src='images/logo.png' style='width: 100%; max-width: 300px' />
								</td>

								<td>
									Invoice #: " .$data["booking_id"] . "<br />
									Created:". date("d-m-Y")."<br />
								</td>
							</tr>
						</table>
					</td>
				</tr>";
}
				echo "<tr class='information'>
					<td colspan=;2>
						<table>
							<tr>
								<td>
                                Goverdhan Villas, Sector 14<br />
                                near Gordhan Sagar Lake, Hiran Magri<br />
                                Udaipur, Rajasthan 313001
								</td>";
while($data1 = mysqli_fetch_array($record1)){
								echo "
								<td>
									Name: " .$row1["first_name"] ." ".$row["booking_id"] . "<br />
									Phone Number: " .$row1["user_contact"] ."
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class='heading'>
					<td>Payment Method</td>

					<td>Check #</td>
				</tr>

				<tr class='details'>
					<td>Card</td>

					<td>1000</td>
				</tr>

                <tr class='heading'>
					<td><span style='padding-right:200px;'>Room Type</span>No. Of Rooms</td>

					<td>Price</td>
				</tr>";
}
			echo"<tr class='item'>
					<td>" .$a."</td>
					<td>" .$z."</td>
					";
					if($_SESSION["a"] == $_SESSION["d"])
					{
						echo "<td>" .$premium."</td>";
					}
					if($_SESSION["a"] == $_SESSION["e"])
					{
						echo "<td>" .$deluxe."</td>";
					}
					if($_SESSION["a"] == $_SESSION["f"])
					{
						echo "<td>" .$lux."</td>";
					}
					echo"
				</tr>

				<tr class='total'>
					<td></td>

					<td>Total:" .$g."</td>
				</tr>
			</table>";*/
			?>
