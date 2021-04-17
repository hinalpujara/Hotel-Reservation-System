<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>A simple, clean, and responsive HTML invoice template</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            $('#printInvoice').click(function(){
                Popup($('.invoice')[0].outerHTML);
                function Popup(data)
                {
                    window.print();
                    return true;
                }
            });
        </script>
		<style>
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}

			/** RTL **/
			.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.rtl table {
				text-align: right;
			}

			.rtl table tr td:nth-child(2) {
				text-align: left;
			}
		</style>
	</head>

	<body>
    <div style="margin-right: 200px; padding-left: 200px; padding-top:20px;">
        <div class="text-right">
            <a
            href="https://restpack.io/html2pdf/save-as-pdf?private=true"
            target="_blank"
            rel="nofollow">
            <button id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i>Download Invoice</button>
            </a>
        </div>
        <hr>
    </div>
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
$sql = "SELECT * FROM booking_data WHERE email = $b";
$result = $conn->query($sql);
$sql1 = "SELECT * FROM user_data WHERE email = $b";
$result1 = $conn->query($sql1);

while($row = $result->fetch_assoc())
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
									Invoice #: " .$row["booking_id"] . "<br />
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
while($row1 = $result1->fetch_assoc()){
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
			</table>";
			?>
		</div>
        <button type="button" class="btn btn-outline-secondary ml-5 mt-3 btn-lg" onclick="document.location='index.php'">Back to Home Page</button>
        <script async src="https://restpack.io/save-as-pdf.js"></script>
	</body>
</html>
