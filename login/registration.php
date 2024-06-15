<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="styles.css"/>
</head>
<body>
<?php
    require('db.php');
    
    if (isset($_REQUEST['username'])) {


        
        if(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
            echo'<script>alert("Username can only contain letters, numbers, and underscores.");</script>';
            header("Refresh:0; url=registration.php");

        }
        else if(empty(trim($_POST["password"]))){
            // $password_err = "Please enter a password.";     
            echo'<script>alert("Please Enter Password.");</script>';
            
        } 
	    else if(strlen(trim($_POST["password"])) < 6 ){
            // $password_err = "Password must have atleast 6 characters.";
            echo'<script>alert("Password must have atleast 6 characters.");</script>';
            header("Refresh:0; url=registration.php");
            
        } 
        elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["password"]))){
            echo'<script>alert("Password  can only contain letters, numbers, and underscores.");</script>';
            header("Refresh:0; url=registration.php");

        }
        else{
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);

        $uname="SELECT * FROM `users` WHERE username='$username'";
        $res1=mysqli_query($con,$uname);
        $row1=mysqli_num_rows($res1);

        $dmail="SELECT * FROM `users` WHERE email='$email'";
        $res2=mysqli_query($con,$dmail);
        $row2=mysqli_num_rows($res2);

        // Validate password
      
	// else
    // {
    //     $password = trim($_POST["password"]);
    // }

        if ($row1) {
            echo "<div class='form'>
                  <h3>Username already exist</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>Regiser</a> again.</p>
                  </div>";

        }else if($row2){
            echo "<div class='form'>
                  <h3>Email already exist</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>Register</a> again.</p>
                  </div>";
            
        }
        
        else{
        $query    = "INSERT into `users` (username, password, email)
                     VALUES ('$username', '$password', '$email')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    }
}
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Sign Up</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="email" class="login-input" name="email" placeholder="Email Address" required>
        <input type="password" class="login-input" name="password" placeholder="Create Password" required>
        <input type="submit" name="submit" value="Sign Up" class="login-button">
        <p class="link">Already have an account? <a href="login.php">Login here</a></p>
    </form>
    
<?php
    }
?>
</body>
<script>

</script>
</html>
