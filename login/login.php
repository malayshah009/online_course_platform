<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="styles.css"/>
    
</head>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='$password'";
        $result = mysqli_query($con, $query) or die();
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
        ?>
        
        <div class="container">
            <h1 class="heading">You are just one step away !!</h1>
        <form class="form" method="post" name="login">
        <h1 class="login-title">LOGIN</h1>
        <input  type="text" class="login-input" name="username" placeholder="Username" autofocus="true" required/>
        <input  type="password" class="login-input" name="password" placeholder="Password" required/>
        <input  type="submit" value="Login" name="submit" class="login-button" required/>
        <a href="../Home page/index.php">
        <input  type="button" value="Go back to Home Page" name="submit" class="login-button go-to-home" required/>
        </a>
        <p class="link">Don't have an account? <a href="registration.php">Sign Up Now</a></p>
        <p class="link">Admin Login <a href="admin.php">Admin</a></p>
        </div>
 
  </form>


    
<?php
    }
?>
</body>
</html>
