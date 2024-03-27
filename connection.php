<?php
$servername = "localhost";
$username =  "root";
$password = "";
$dbname = "ankush";

$con = mysqli_connect($servername, $username, $password, $dbname);

if(!$con)
{
    echo " not connected";
}
?>