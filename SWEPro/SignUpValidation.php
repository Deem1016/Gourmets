<?php

session_start();
include 'connectDB.php';

if (isset($_POST['submitAdmin'])) {
  
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM Admin WHERE userName = '" . $_POST['userName'] . "'";
    $result = mysqli_query($connection, $sql);
    if (!(mysqli_num_rows($result) > 0)) {
        $sql1 = "INSERT INTO Admin ( userName, pass) Values( '" . $_POST['userName'] . "' , '" . $pass . "')";
        $result1 = mysqli_query($connection, $sql1);
        if ($result1) {
            $_SESSION['role'] = "Admin";
              $sql2 = "SELECT * FROM Admin WHERE userName = '" . $_POST['userName'] . "'";
              $result2 = mysqli_query($connection, $sql2);
                 $row = mysqli_fetch_assoc($result2) ;
      
            
            $_SESSION['ID'] = $row['AdminID'];
            header("Location: AdminHome.php");
            exit();
        } else {
            echo '<script>window.location="signupadmin.php"; alert("Somthing went wrong, Try again!");</script>';
        }
    } else {
        echo '<script>window.location="signupadmin.php"; alert("user name already exists! Try again or log-in");</script>';
    }
}



if (isset($_POST['submitUser'])) {
  
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM User WHERE userName = '" . $_POST['userName'] . "'";
    $result = mysqli_query($connection, $sql);
    if (!(mysqli_num_rows($result) > 0)) {
        $sql1 = "INSERT INTO User ( userName, pass) Values( '" . $_POST['userName'] . "' , '" . $pass . "')";
        $result1 = mysqli_query($connection, $sql1);
        if ($result1) {
            $_SESSION['role'] = "User";
              $sql2 = "SELECT * FROM Admin WHERE userName = '" . $_POST['userName'] . "'";
              $result2 = mysqli_query($connection, $sql2);
                 $row = mysqli_fetch_assoc($result2) ;
      
            
            $_SESSION['ID'] = $row['UserID'];
            header("Location: Restaurants.php");
            exit();
        } else {
            echo '<script>window.location="signup.php"; alert("Somthing went wrong, Try again!");</script>';
        }
    } else {
        echo '<script>window.location="signup.php"; alert("user name already exists! Try again or log-in");</script>';
    }
}
