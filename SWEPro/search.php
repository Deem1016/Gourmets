<?php

include 'connectDB.php';
session_start();

if (isset($_POST['search2']))
{
    
    
     $found = false;
     $tmp = mysqli_real_escape_string($connection, $_POST['search2']);
     $tmp = strtolower($tmp);
     $string = preg_replace('/\s+/', '', $tmp);

     $ReID= "";
     
     $sql1 = "SELECT * FROM `Restaurants`";
     $result1 = mysqli_query($connection, $sql1);
     while ($row1 = mysqli_fetch_assoc($result1))
     {
         $tmp2 = strtolower($row1['ResName']);
         $tmp2 = preg_replace('/\s+/', '', $tmp2);
         if (strcmp($string,$tmp2 ) == 0   )
         {
             $found = true ; 
          header("Location: Reviews.php?ResID=" .$row1['ResID']);
              break;
         }
                 
                 
                 
                 
     }
     
     if (!$found)
     {
           echo '<script> alert("Sorry, no results found"); window.location="Restaurants.php" ; </script>';  
     }
     
     
     
   
    
}
 else {
              echo '<script> alert("Please enter the restaurant name"); window.location="Restaurants.php" ; </script>';
 
}