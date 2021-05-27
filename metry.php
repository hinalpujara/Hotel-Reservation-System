<?php
    session_start();
    $message="";
        if(count($_POST)>0) {
          $_SESSION["first_name"] = "";
            $con = mysqli_connect("localhost","root","",'hotel_management') or die('Unable To connect');
            $result = mysqli_query($con,"SELECT * FROM user_data WHERE email='" . $_POST["email"] . "' and user_password = '". $_POST["password"]."'");
            $row  = mysqli_fetch_array($result);
            if(is_array($row)) {
            $_SESSION["first_name"] = $row['first_name'];
            $_SESSION["last_name"] = $row['last_name'];
            $_SESSION["email"] = $row['email'];
            header("Location:index.php");
            }
            else {
              echo "<script language='javascript'>";
              echo "alert('WRONG PASSWORD')";
              echo "</script>";
              header("Location:userlogin.php");
            }
        }
        if(isset($_SESSION["first_name"])) {

        }
?>
