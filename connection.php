<?php

$conn = "";

try {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "hotel_management";

    $conn = new PDO(
        "mysql:host=$servername; dbname=hotel_management",
        $username, $password
    );

   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
