<?php
session_start();
require 'config.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_SESSION['username'];
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];


    if (empty($email)) {
        $_SESSION['update_error'] = "Email is required.";
        header('Location: ../USER/PROFILE/editprofile.php');
        exit();
    }

    
    if (!empty($password) && strlen($password) < 6) {
        $_SESSION['update_error'] = "Password must be at least 6 characters long.";
        header('Location: ../USER/PROFILE/editprofile.php');
        exit();
    }

    if ($password !== $confirmpassword) {
        $_SESSION['update_error'] = "Passwords do not match.";
        header('Location: ../USER/PROFILE/editprofile.php');
        exit();
    }

    
    if (!empty($password)) {
        
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $query = $con->prepare("UPDATE users SET email = ?, password = ? WHERE username = ?");
        $query->bind_param("sss", $email, $hashedPassword, $username);
    } else {
        
        $query = $con->prepare("UPDATE users SET email = ? WHERE username = ?");
        $query->bind_param("ss", $email, $username);
    }

    if ($query->execute()) {
        $_SESSION['update_success'] = "Profile updated successfully.";
    } else {
        $_SESSION['update_error'] = "Failed to update profile.";
    }

    header('Location: ../USER/PROFILE/editprofile.php');
    exit();
}
?>
