<?php
session_start();
require 'config.php'; 


$error = $success = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signup'])) {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];


    if ($password !== $confirm_password) {
        $error = "Passwords do not match.";
        $_SESSION['signup_error'] = $error;
        header('Location:../USER/LOGIN_SYSTEM/register.php');
        exit;
    } else {
        $query = $con->prepare("SELECT username FROM users WHERE username = ?");
        $query->bind_param("s", $username);
        $query->execute();
        $query->store_result();

        if ($query->num_rows > 0) {
            $error = "Username already taken!";
            $_SESSION['signup_error'] = $error;
            header('Location:../USER/LOGIN_SYSTEM/register.php');
            exit;
        } else {


            $query = $con->prepare("SELECT email FROM users WHERE email = ?");
            $query->bind_param("s", $email);
            $query->execute();
            $query->store_result();

            if ($query->num_rows > 0) {
                $error = "Email address already taken!";
                $_SESSION['signup_error'] = $error;
                header('Location:../USER/LOGIN_SYSTEM/register.php');
                exit;
            } else {

                $hashed_password = password_hash($password, PASSWORD_BCRYPT);
                $insert = $con->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
                $insert->bind_param("sss", $username, $email, $hashed_password);

                if ($insert->execute()) {
                    $success = 'Sign-up successful! You can now <a href="../../USER/LOGIN_SYSTEM/login.php">sign in</a>.';
                } else {
                    $error = "An error occurred. Please try again.";
                }
                $insert->close();
            }
        }
        $query->close();
    }



    $_SESSION['signup_error'] = $error;
    $_SESSION['signup_success'] = $success;
    header('Location: ../USER/LOGIN_SYSTEM/register.php');
    exit;
}
?>