<?php
    session_start();
    // Destroy session
    if(session_destroy()) {
        // Redirecting To Home Page
        // include './login/admin.php';
        header("Location: ../login/admin.php");
    }
?>

