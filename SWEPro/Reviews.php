<!DOCTYPE html>
<?php
include "connectDB.php";
session_start();
if (isset($_GET['ResID'])) {
    $sqlQ = "SELECT ResName FROM `Restaurants` WHERE ResID=" . $_GET['ResID'];
    $resultQ = mysqli_query($connection, $sqlQ);

   $rowQ = mysqli_fetch_assoc($resultQ) ;
   
   
   $sqlRR = "SELECT * FROM `reviews` WHERE ResID=" . $_GET['ResID'];
    $resultRR = mysqli_query($connection, $sqlRR);
       if(mysqli_num_rows($resultRR)==0){
         echo '<script type ="text/JavaScript">';  
        echo 'alert("There are no reviews for this restaurant.")';  
        echo '</script>';  
      }
     // $rowRR = mysqli_fetch_assoc($resultRR) ;
      
}
?>
<html>
    <head>
<title><?php echo $rowQ['ResName']  ?> </title> <!--change it -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="review.css"><meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <link rel="icon" href="icons/favicon.ico">
        <script>
                function al()
                {
                    alert("Your review has been submitted successfully!");
                    return true;
                }
                
                </script>

    </head>
    <body>
        <!-- NAVBARS START--------------------------------------->
        <header>
            <div class="navbar">
                <input type="checkbox" id="check">
                <a class="logo" href="index.php" accesskey="h">
                    <img src="Images/logo.png" alt="logo"> <!-- ADD OUR LOGO -->
                </a>
                <!-- Nav Links START----------------------->
                <ul class="nav">
                    <li><a href="Restaurants.php" >Restaurants </a> </li> <!-- Add link here please -->
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


        <!-- Social START---------------------------->
        <ul class="social">
            <li><a href="https://www.instagram.com/" target="_blank"><img src="icons/instagram.png" alt="instagram"></a></li>
            <li><a href="https://www.whatsapp.com/" target="_blank"><img src="icons/whatsapp.png" alt="whatsapp"></a></li>
            <li><a href="https://twitter.com/home" target="_blank"><img class="twi" src="icons/twitter.png" alt="twitter"></a>
            </li>
        </ul>
    </div>
    <!------------------------------------------------------------->

    <div class="about-area" id="about">

        <div class="curvedUpper">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1210 319">
            <path fill="#CB322B" fill-opacity="1"
                  d="M0,128L80,122.7C160,117,320,107,480,122.7C640,139,800,181,960,192C1120,203,1280,181,1360,170.7L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
            </svg>
        </div>
        <div class="curved">
            <h1 class="close"> The reviews about <?php echo $rowQ['ResName']  ?> </h1>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1300 319">
            <path id="chngcolor" fill-opacity="1"
                  d="M0,128L80,122.7C160,117,320,107,480,122.7C640,139,800,181,960,192C1120,203,1280,181,1360,170.7L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
            </svg>
        </div>
    </div>

    <!-- Description of the restaurant start here -->
    <div class="ResDes">
        <?php
        if (isset($_GET['ResID'])) {
            $sql = "SELECT * FROM `Restaurants` WHERE ResID=" . $_GET['ResID'];

            $result = mysqli_query($connection, $sql);
            $row = mysqli_fetch_assoc($result);
            echo '<img class="Images" src="' . $row['logoImg'] . '" width="300" height="200">';
            echo '<br>';
            echo '<h2>' . $row['ResName'] . '</h2>';
            echo '<p>' . $row['description'] . '</p>';
        }
        ?>

        <div class="underline"></div>
    </div>

    <a class="write" href="#write"><i class="fa fa-pencil-square-o" ></i></a>




    <!-- reviews of the restaurant start here -->

<?php
if (isset($_GET['ResID'])) {
    $sql2 = "SELECT * FROM `Reviews` WHERE ResID=" . $_GET['ResID'];
    $result2 = mysqli_query($connection, $sql2);
    while ($row2 = mysqli_fetch_assoc($result2)) {
        echo ' <div class="box">';
        if ($row2['Anonymous'] == 0) { // user want to show his/her name
            $sql3 = "SELECT UserID FROM `Reviews` WHERE RevID=" . $row2['RevID'];
            $result3 = mysqli_query($connection, $sql3);
            $row3 = mysqli_fetch_assoc($result3);
$id = $row3['UserID'];
            /////
            $sql4 = "SELECT userName FROM `User` WHERE UserID=" .$id;
            $result4 = mysqli_query($connection, $sql4);
            $row4 = mysqli_fetch_assoc($result4);
            /////
            echo '  <p class="UserInfo"> <i class="fa fa-user-circle-o"></i> <b> UserName: </b>' . $row4['userName'] . ' </p>';
        } else {
            echo '  <p class="UserInfo"> <i class="fa fa-user-circle-o"></i> <b> UserName: </b> Anonymous </p>';
        }
        echo " <br>  <hr>    <ul>" ;
        echo ' <li> <i class="fa fa-cutlery food"></i><span> Food Quality :</span> '.$row2['FoodQuality'].'/10 </li> ';
         echo '  <li> <i class="fa fa-dollar price"></i> <span> Prices:</span>'. $row2['Price'] . '/10 </li> ' ;
           echo ' <li> <i class="fa fa-star star"></i><span> Service:</span>' . $row2['Service'].'/10 </li> ';
           echo '  <li>  <fieldset class ="comment">  <legend> <span> Comment <i class="fa fa-commenting-o"></i> </span></legend>';
           echo '<p>'. $row2['comment'] . '</p>';
           echo '</fieldset> </li>   </ul>    </div>'; 
           
        
    }
    
    
    
    
}
    ?>

 
    
    
    
    <!-- write your review start here -->
  
        <?php
        if (isset($_SESSION['role']) && isset($_SESSION['ID']))
        {
            if($_SESSION['role'] == "User"){
            echo '  <div class="form-style-3" id="write">';
      echo  '<form method="POST" onsubmit="return al()" action="AddReview.php?ResID='.$_GET['ResID'].'&UserID='.$_SESSION['ID'].' " >';
          echo   '<fieldset><legend>Write your review!</legend>


                <label for="field1"><span>Food quality:</span>  
                    <select name="food" id="food"  class="select-field">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select></label>

                <label for="field2"><span>Prices:</span>  
                    <select name="Prices" id="Prices" class="select-field">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select></label>




                <label for="field3"><span>Service:</span> <select name="Service" id="Service" class="select-field">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select></label>






                <label for="field6"><span>Message <span class="required">*</span></span><textarea name="field6" class="textarea-field" placeholder="Description of your experience of the restaurant"></textarea></label> <br>
                <p id="postAn"><input type="checkbox"  name="postAn" value="postAn">  
                    Anonymous   </p>
                <label><span> </span>  <input type="submit" name = "submit" value="Submit" id="myinput" ></label>


            </fieldset>

        </form>
        </div> ' ; }}?>
  
    <br> <br>
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
