<?php

require "../../database/db.php";
session_start();

echo $email = $_POST['email'];
echo $password = $_POST['pswd'];



$sql = "Select * from users where email='$email' and password='$password'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION["email"] = $row["email"];

    header("Location: ../dashboard/home.php");
    exit(); // Make sure to exit after redirection
}
else{
   echo "wrong username and password";

}

// if ($con->query($sql) === TRUE) {
//     header("Location: {$_SERVER['HTTP_REFERER']}");
//     exit(); // Make sure to exit after redirection
// } else {
//     echo "Error: " . $sql . "<br>" . $con->error;
// }
?>