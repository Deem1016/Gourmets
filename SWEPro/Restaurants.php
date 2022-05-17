
<!DOCTYPE html>
<?php include "connectDB.php";
session_start();
?>
<html>
    <head>
        <title>Restaurants</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="Restaurants.css">
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="icons/favicon.ico">
     
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <style>

            

form.search input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
  
}

form.search button {
  float: left;
  width: 20%;
  padding: 10px;
 background: #F2A22C;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.search button:hover {
  background: #cf800c;
}

form.search::after {
  content: "";
  clear: both;
  display: table;
}
</style>
        
    </head>
    <body>
        <!-- NAVBARS START--------------------------------------->
        <header>
            <div class="navbar">
                <input type="checkbox" id="check">
                <a class="logo" href="Restaurants.php" accesskey="h">
                    <img src="Images/logo.png" alt="logo"> <!-- ADD OUR LOGO -->
                </a>
                <!-- Nav Links START----------------------->
                <ul class="nav">
                    <li><a href="Restaurants.php" >Restaurants </a> </li>  <!-- Add link here please -->
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
    <!-- ABOUT US START----------------------------------------------------------->
    <div class="about-area" id="about">
        <div class="curvedUpper">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1210 319">
            <path fill="#CB322B" fill-opacity="1"
                  d="M0,128L80,122.7C160,117,320,107,480,122.7C640,139,800,181,960,192C1120,203,1280,181,1360,170.7L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
            </svg>
        </div>
        <div class="curved">
            <h1>Find your restaurant here ! </h1>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1300 350">
            <path id="chngcolor" fill-opacity="1"
                  d="M0,128L80,122.7C160,117,320,107,480,122.7C640,139,800,181,960,192C1120,203,1280,181,1360,170.7L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
            </svg>
        </div>
    </div>


    <div class="Restaurants">
        <div> </div>

        <br>  <br>
        
        <form class="search" method="POST" action="search.php" style="margin-left: 50px; max-width:300px">
       <input type="text" placeholder="Search.." name="search2">
        <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        <br>
        <?php
        $count = -1;
        $sql = "SELECT * FROM `Restaurants`";
        $result = mysqli_query($connection, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            if ($count == -1)
                echo '<div class="container" >';


            if ($count % 2 == 0) {
                echo '</div>';
                echo '<div class="container" >';
            }


            echo ' <div class="box">';
            echo '<img src="' . $row['logoImg'] . '" class="images" alt="RestaurantImage">';
            echo "<h2>" . $row['ResName'] . "</h2>";
            echo ' <a href="Reviews.php?ResID='.$row['ResID'].'" class="links"><i class="fa fa-eye" style="font-size:22px"></i> View restaurant</a>';
            echo ' </div>';
            if ($count == -1) {
                $count = 1;
            } else {
                $count++;
            }
        }
        ?>
        
    </div>

        <!--FOOTER START------------------------------------------------------------------------->
        <footer>
            <ul class="social_icon">
                <li><a href="https://www.instagram.com/" target="_blank"><img src="icons/instagram.png" alt="instagram"></a></li>
                <li><a href="https://www.whatsapp.com/" target="_blank"><img src="icons/whatsapp.png" alt="whatsapp"></a></li>
                <li><a href="https://twitter.com/home" target="_blank"><img class="twi" src="icons/twitter.png" alt="twitter"></a></li>
            </ul>
            <p>©2021 Made by SWE Project Team</p>
        </footer>

        <!-- BACK TO TOP START ---------------------------------------------------------------------->
        <a class="up" href="#"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>


        <!-- JS For Themes START ---------------------------------------------------------------------->
        <script>
            var anonymous = document.getElementById("anonymous");

            anonymous.onclick = function () {
                document.body.classList.toggle("dark-theme");
                if (document.body.classList.contains("dark-theme")) {
                    anonymous.src = "normal.png";
                } else {
                    anonymous.src = "anon.png";
                }
            }
        </script>
</body>
</html>
