<?php
session_start(); // Start the session to set messages
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $destination = $_POST['destination'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $optional = $_POST['optional'];

    // Basic validation
    if (empty($name) || empty($email) || empty($destination) || empty($startdate) || empty($enddate)) {
        $_SESSION['message'] = "<span style='color: red;'>Please fill in all required fields.</span>";
        header("Location: ../index.php#form");
        exit();
    }

    // Insert data into the database
    $sql = "INSERT INTO destination (name, email, destination, startdate, enddate, optional) 
            VALUES ('$name', '$email', '$destination', '$startdate', '$enddate', '$optional')";

    if ($con->query($sql) === TRUE) {
        $_SESSION['message'] = "<span style='color: green;'>Record added successfully!</span>";
    } else {
        $_SESSION['message'] = "<span style='color: red;'>Error: " . $con->error . "</span>";
    }

    $con->close();
    header("Location: ../index.php#form");
    exit();
}
