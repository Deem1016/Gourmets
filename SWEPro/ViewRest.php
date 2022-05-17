<?php
include 'connectDB.php';
session_start();
error_reporting(E_ALL);
ini_set('display_error',1);
$id = $_GET['id'];
$sql = " SELECT * FROM restaurants WHERE ResID=$id";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
$ResID = $row['ResID'];
$name = $row['ResName'];
$desc = $row['description'];
$logo = $row['logoImg'];
$type = $row['type'];
$phoneNumber = $row['phoneNumber'];
?>
<!DOCTYPE html>

<html>
     
    <head>
        <title><?php echo $name; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="viewRest.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="AdminHomeCSS.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    </head>
    
    <body>
        <header class="header"> 
            <div class="navbar">
                <input type="checkbox" id="check">
                <a class="logo" href="AdminHome.php" accesskey="h">
                    <img src="Images/logo.png" alt="logo"> <!-- ADD OUR LOGO -->
                </a>
          <!-- Nav Links START----------------------->
                <ul class="nav">
                    <li><a href="AdminHome.php" accesskey="h">Home</a> </li>
            <?php if(isset($_SESSION['role']))
                    {
                       echo '<li><a href="WipeSession.php" accesskey="o">Log Out</a></li> ';
                    }
                 
                 ?>
    
                </ul>
                
                
    
                <!-- Nav Btn Bars START------------->
                <label for="check">
                    <div class="btn-bars" id="btn">
                        <span class="icon1"></span>
                        <span class="icon2"></span>
                        <span class="icon3"></span>
                    </div>
                </label>
            </div>
            
        </header>
        <main style="width:100%; ">
            <div class="deem-div" style="min-width:70em;">
                <?php echo "<h3>".$name."</h3>"; ?>
                <div style="height: 5px; max-width: 290px; background-color: #214d16; margin:auto;"></div>
                <?php echo "<img src='".$logo."' class=\"images\" alt=\"Restaurant1\">";?>
                <br>
                <div class="deem-div2">
                    <h4>About the restaurant:</h4>
                    <div style="height: 3px; max-width: 280px;  background-color: #F2A22C;"></div>
                    <?php echo "<p>".$desc." </p> ";?>
                    
                    <h4>Restaurant type:</h4>
                    <div style="height: 3px; max-width: 210px; background-color: #F2A22C;"></div>
                    <?php echo "<p>".$type."</p>"; ?>
                    

                    <h4>phone:</h4>
                    <div style="height: 3px; max-width: 90px; background-color: #F2A22C;"></div>
                    <?php echo "<p>".$phoneNumber."</p>";?>
                    
                </div>
                    <div class="deem-div3">
                        <?php echo '<a id="deem-button" href="Reviews.php?ResID='.$ResID.'"  >View reviews</a>'; ?>
                        <?php echo '<a id="deem-button"   href="EditRes.php?ResID='.$ResID.'">Edit informaion</a>'; ?>
                        <?php echo '<a id="deem-button-delete" href="DeleteRes.php?ResID='.$ResID.'" > DELETE</a>'; ?>
                    </div>
            </div>
        </main>
            
        <!--FOOTER START------------------------------------------------------------------------->
<footer>
    <ul class="social_icon">
      <li><a href="https://www.instagram.com/" target="_blank"><img src="icons/instagram.png" alt="instagram"></a></li>
      <li><a href="https://www.whatsapp.com/" target="_blank"><img src="icons/whatsapp.png" alt="whatsapp"></a></li>
      <li><a href="https://twitter.com/home" target="_blank"><img class="twi" src="icons/twitter.png" alt="twitter"></a></li>
    </ul>
    <p>©2021 Made by SWE Project Team</p>
</footer>
    </body>

    
</html>

