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
<script src="non-empty.js"></script>

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
            </div>
          </div>
          <div class="col-right">
            <div class="login-form">
              <h2> Sign up</h2>
              <form  action = "SignUpValidation.php" method="POST">
           <p>
                Enter your Username
                  <input name="userName" type="text" placeholder="Username"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,30}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 to 30 characters" required>
                </p>
                <p>
                Enter your password
                  <input name="pass" type="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 to 16 characters" required>
                </p>

                <p>
                  <input type="submit" value="Create an account" class="button" name="submitUser">
                </p>
                <br>
              </form>
            </div>
          </div>
        </div>
      </div>

</body>
</html>
