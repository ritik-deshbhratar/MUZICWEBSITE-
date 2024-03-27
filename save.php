<?php
include('connection.php');
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$country = $_POST['country'];
$gender = $_POST['gender'];

$sql = "INSERT INTO `details`(`fname`, `lname`, `email`, `mobile`, `country`, `gender`) VALUES ('$fname','$lname','$email','$mobile','$country','$gender')";

$result = mysqli_query($con, $sql);

if ($result) {
    echo "data submitted successfully";
} else {
    echo "data submittion failed";
}
