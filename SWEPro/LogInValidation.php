<?php

session_start();
include 'connectDB.php';

if (isset($_POST['submitUser'])) {
    $userName = $_POST['userName'];
    $Pass = $_POST['pass'];

    $sql = "SELECT * FROM User WHERE userName = '$userName'";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    $SroredPass = $row['pass'];

    if (strcmp($Pass, $SroredPass) == 0 )  {
        $_SESSION['role'] = "User";
        $_SESSION['ID'] = $row['UserID'];
        header("Location: Restaurants.php");
        exit();
    } else {
        echo '<script>window.location="login.php"; alert("There is no account associated with the given information, You can re-check your input or sign-up now!");</script>';
    }
}

if (isset($_POST['submitAdmin'])) {
   $userName = $_POST['userName'];
    $Pass = $_POST['pass'];

    $sql = "SELECT * FROM Admin WHERE userName = '$userName'";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    $SroredPass = $row['pass'];

    if (strcmp($Pass, $SroredPass) == 0 )  {
        $_SESSION['role'] = "Admin";
        $_SESSION['ID'] = $row['AdminID'];
        header("Location: AdminHome.php");
        exit();
    } else {
        echo '<script>window.location="loginAdmin.php"; alert("There is no account associated with the given information, You can re-check your input or sign-up now!");</script>';
    }
}


