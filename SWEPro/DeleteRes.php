<?php
include 'connectDB.php';
session_start();
        $ResID = $_GET['ResID'];
        $sql2 = "DELETE FROM restaurants WHERE ResID=".$ResID;
        if($result = mysqli_query($connection, $sql2)){
        echo '<script> alert("the restaurant has been removed"); window.location="AdminHome.php";</script>';
        }
    
    ?>

