<?php
// include '../login/login.php';
    session_start();
    // Destroy session
    if(session_destroy()) {
        // Redirecting To Home Page
        header("Location: ../login/login.php");
    }
?>

