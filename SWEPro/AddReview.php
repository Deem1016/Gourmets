// edited 
<?php
include 'connectDB.php';
session_start();

if (isset($_GET['UserID']) && isset($_GET['ResID']))
    $userID = $_GET['UserID'];
    $ResID = $_GET['ResID'];
    
    $foodQ = $_POST['food'];
    $price = $_POST['Prices'];
    $service = $_POST['Service'];
    $comment = $_POST['field6'];
    $postAn = $_POST['postAn'];
    
    if (isset($postAn))
        $postAn = 1 ;
    else
        $postAn = 0 ;
    
  

 $sql = "INSERT INTO  Reviews ( FoodQuality , Price, Service , comment, UserID , ResID, Anonymous)  Values( '" .  $foodQ . "' , '" .  $price . "' , '" . $service. "' , '" . $comment. "' , '" .  $userID. "' , '" .  $ResID . "' , '" .  $postAn . "')";
  if($result = mysqli_query($connection, $sql))
     {
      
        header("Location: Reviews.php?ResID=" . $ResID);
        
        
        
     }

    
    
    
    
    
    
    
    
    
    
    
    
    
    
