<?php
    session_start();
    if(!isset($_SESSION["admin"])) {
        echo 'session start';

        
        header("Location: ../login/admin.php");
        exit();
    }
?>
