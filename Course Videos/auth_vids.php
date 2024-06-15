<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: ../../FYP/login/login.php");
        exit();
    }
?>
