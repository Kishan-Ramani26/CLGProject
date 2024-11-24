<?php
session_start();
include 'config.php';

// Ensure only admins can access this page
if ($_SESSION['isadmin'] != 1) {
    header("Location: ../ADMIN/adminpanel.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $isadmin = $_POST['isadmin'];

    // Update user's admin status
    $sql = "UPDATE users SET isadmin = ? WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ii", $isadmin, $id);

    if ($stmt->execute()) {
        $_SESSION['message'] = "User admin status updated successfully.";
    } else {
        $_SESSION['message'] = "Error updating user admin status.";
    }

    $stmt->close();
    $con->close();
    header("Location: ../ADMIN/adminpanel.php");
    exit();
}
?>
