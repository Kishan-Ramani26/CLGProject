<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$con = new mysqli($host, $username, $password, $dbname);

if($con->connect_error){
    die("Connection failed: ". $con->connect_error);
}else{
    // echo "Connected successfully";
}
?>