<?php


require("db.php");
session_start();



?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
    <style>
        .login-input{
            height: 2.5rem;
        }
    </style>
</head>
<body>
<?php

// require("../uploadvideo/index.php");
// require("db.php");


if(isset($_POST['admin'])){
                
    
    $query="SELECT * FROM `admin` WHERE `admin`='$_POST[admin]' and `password`='$_POST[pass]'";
    $result = mysqli_query ( $con , $query ) ;
    $row=mysqli_fetch_array($result);
    // echo $row['admin'];



    
    
    if (mysqli_num_rows($result )==1)
        {
            $_SESSION['admin'] = true;
    
            header('Location:../admin/manage.php');
            
        }
    else
        {   
            
            echo'<script>alert("Invalid admin details");</script>';
            
        }

    
    }


?>

<form class="form" method="post" name="login" action="admin.php">
        <h1 class="login-title">ADMIN</h1>
        <input  type="text" class="login-input" name="admin" placeholder="Admin id" autofocus="true" required/>
        <input  type="password" class="login-input" name="pass" placeholder="Password" required/>
        <input  type="submit" value="Login" name="submit" class="login-button" required/>
        <a href="../Home page/index.php">
        <input  type="button" value="Go back to Home Page" name="submit" class="login-button go-to-home" required/>
        </a>
</form>
        <?php
            

        ?>
        
</body>
</html>
