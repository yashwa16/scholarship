<?php
require "../../database/db.php";

echo $fullname = $_POST['fullName'];
echo $email = $_POST['email'];
echo $password = $_POST['pswd'];
echo $phone = $_POST['phone'];
echo $date = $_POST['dob'];
echo $university= $_POST['university'];
echo $gpa= $_POST['gpa'];
echo $statement = $_POST['essay'];

$sql = "INSERT into users(fullname,email,`password`,phone,`birthday`,`university`,`gpa`,`personal_essay`) values ('$fullname','$email','$password','$phone','$date','$university','$gpa','$statement')";


if ($con->query($sql) === TRUE) {
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit(); // Make sure to exit after redirection
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}


?>
