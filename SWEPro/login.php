<?php
session_start();
if (isset($_SESSION["role"])) {
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<head>
<title> Login/Sign up </title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="login.css">
</head>
<body>     
    <div class="wrapper">
        <div class="container">
          <div class="col-left">
            <div class="login-text">
                <img src="Images/logo.png" alt="logo"> 
              <p>
                Turn every experience into a Gourmet
              </p>
              <a class="btn" href="">Read More</a>
            </div>
          </div>
          <div class="col-right">
            <div class="login-form">
              <h2> Log in</h2>
              <form action="LogInValidation.php" method="POST">
                <p>
                  <input name="userName" type="text" placeholder="Username" required>
                </p>
                <p>
                  <input name="pass" type="password" placeholder="Password" required>
                </p>
                <p>
                  <input name="submitUser" type="submit" value = "Log In" class="button" >
                </p>
                <p>
                  <a href="signup.php">Forgot your password?</a>
                  <br>
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>



</body>
</html>
