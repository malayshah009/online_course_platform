
<?php
//include auth_session.php file on all user panel pages
include 'db.php';
include("auth_session.php");
$username=$_SESSION["username"];
$password=$_SESSION["password"];

$query= "SELECT * FROM `users` WHERE username='$username' AND password='" .md5($password) . "'";

$result = mysqli_query($con, $query) or die();
$rows = mysqli_num_rows($result);
// echo $rows;

$pass= "SELECT password FROM `users` WHERE username='$username'";
$res=mysqli_query($con, $pass);
$ans=mysqli_fetch_array($res);
$oldpw=$ans['password'];

$idquery="SELECT `id` FROM `users` WHERE username='$username'";
$id_res=mysqli_query($con, $idquery);
$id_array=mysqli_fetch_array($id_res);
$id=$id_array['id'];



if (isset($_POST['change_pw'])) {
    $old_pw_in=$_POST['old_pw'];
    $new_pw=$_POST['new_pw'];
    $change_res=0;

    if ($oldpw!=$old_pw_in) {
      echo'<script>alert("Invalid Old Password");</script>';
        
    }
    else if(empty(trim($_POST["new_pw"]))){
      // $password_err = "Please enter a password.";     
      echo'<script>alert("Please Enter new Password.");</script>';
      header("Refresh:0; url=update_pw.php"); 
      
    } 
    else if(strlen(trim($_POST["new_pw"])) < 6 ){
      // $password_err = "Password must have atleast 6 characters.";
      echo'<script>alert("Password must have atleast 6 characters.");</script>';
      header("Refresh:0; url=update_pw.php");
      
    } 
    else if(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["new_pw"]))){
      echo'<script>alert("Password  can only contain letters, numbers, and underscores.");</script>';
      header("Refresh:0; url=update_pw.php");

  }
    else{
      $sql="UPDATE `users` SET `password`=$new_pw where `id`=$id";
      $change_res=mysqli_query($con,$sql);
      if($change_res){
          echo'<script>alert("Password Changed Successfully");</script>';  
          header("Refresh:0; url=dashboard.php");
      }
        
    }
}




// $row2=mysqli_num_rows($res2);


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <link rel="stylesheet" href="styles.css" />
    <style>
        .login-input{
            height: 2.5rem;
        }
    </style>
  </head>
  <body>

  <form class="form" method="post" name="login">
        <h1 class="login-title">Change Password</h1>
        <input  type="password" class="login-input" name="old_pw" placeholder="Old Password" autofocus="true" required />
        <input  type="password" class="login-input" name="new_pw" placeholder="New Password" required />
        <?php 
        echo'<a href="">
        <input  type="submit" value="Change Password" name="change_pw" class="login-button" required/>
        </a>';
        ?>
        <!-- <a href="update_pw_code.php">
        <input  type="submit" value="Change Password" name="change_pw" class="login-button" required/>
        </a> -->

        <a href="dashboard.php">
        <input  type="button" value="Go back to Home Page" name="submit" class="login-button go-to-home" required/>
        </a>
        
        </div>
 
  </form>

  </body>
</html>
