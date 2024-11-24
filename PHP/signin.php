<?php
session_start();
require 'config.php';

$error = "";


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {

    $username = trim($_POST['username']);
    $password = $_POST['password'];


    if (empty($username) || empty($password)) {
        $error = "Both fields are required!";
    } else {

        $query = $con->prepare("SELECT password FROM users WHERE username = ?");
        $query->bind_param("s", $username);
        $query->execute();
        $query->store_result();

        if ($query->num_rows > 0) {

            $query->bind_result($hashed_password);
            $query->fetch();



            if (password_verify($password, $hashed_password)) {

                $_SESSION['username'] = $username;
                header('Location: ../index.php');
                exit;
            } else {

                $error = "Incorrect password!";
            }
        } else {

            $error = "Username not found!";
        }
        $query->close();
    }


    $_SESSION['login_error'] = $error;
    header('Location: ../USER/LOGIN_SYSTEM/login.php');
    exit;
}
?>