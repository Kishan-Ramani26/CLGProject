<?php
    session_start();
    require 'config.php';
    // unset($_SESSION['username']);
   
    session_destroy();
    header("Location: ../index.php"); //redirect back to the form

?>