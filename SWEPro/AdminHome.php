<?php
include 'connectDB.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="AdminHomeCSS.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
	<title>
		Home Page
	</title>
	<link rel="icon" href="icons/favicon.ico">
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
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 319">
				<path fill="#CB322B" fill-opacity="1"
					d="M0,128L80,122.7C160,117,320,107,480,122.7C640,139,800,181,960,192C1120,203,1280,181,1360,170.7L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
				</path>
			</svg>
		</div>
		<div class="curved">
			<h1>Hello, watch your restaurant reviews with us!</h1>
			
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 319">
				<path id="chngcolor" fill-opacity="1"
					d="M0,128L80,122.7C160,117,320,107,480,122.7C640,139,800,181,960,192C1120,203,1280,181,1360,170.7L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
				</path>
			</svg>
		</div>
	</div>
	<!-- Restaurants------------------------------------------------------------------------>
	<div class="servicecard">
				<div class="servicecardtitle ">
               <h1>Your Restaurants </h1>
			   <div class="underline"></div>
			</div> 
            <div class="sbox-container" >
            <?php
            $count = -1;
            $sqlRestaurants = "SELECT * FROM restaurants";
            $resultRestaurants = mysqli_query($connection, $sqlRestaurants);
            while ($rows = $resultRestaurants->fetch_assoc()) {
                $ResID = $rows['ResID'];
                if ($count == -1)
                echo '<div class="container" >';


            if ($count % 2 == 0) {
                echo '</div>';
                echo '<div class="container" >';
            }
                echo '<div class="s-box">';
                echo '<img src="'.$rows['logoImg'].'" class="images" alt="Restaurant1">';
                echo '<h2>'.$rows['ResName'].'</h2>';
                echo '<a href="ViewRest.php?id='.$ResID.'" class="readmorebtn">View restaurant</a>';
                echo '</div>';
                if ($count == -1) {
                $count = 1;
            } else {
                $count++;
            }
            }
            ?>
            
            

              
            </div>
          
          
        </div> 

<!-- WEBSITE SERVICES START------------------------------------------------------------------------>
  <div class="servicecard">
            <div class="servicecardtitle ">
               <h1>Services</h1> 
               <div class="underline"></div>
            </div>
            <div class="sbox-container" >
                <div class="s-box">
                    <img src="Images/Add.png" id="img1" alt="add">
                    <h2>Add your restaurant</h2>
                    <a href="AddRes.php" class="readmorebtn">ADD</a> <!-- ADD LINK HERE PLEASE -->
                </div>
        <!--   <div class="s-box">
                <img src="" id="img2" alt="more">
                <h2></h2>
                <a href="#" class="readmorebtn">Read More </a> PS. This was made just incase we have more functions
            </div> --> 
        </div>
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
<!--	<script>
		var anonymous = document.getElementById("anonymous");

		anonymous.onclick = function() {
			document.body.classList.toggle("dark-theme");
			if(document.body.classList.contains("dark-theme")){
				anonymous.src = "normal.png";
			}
			else {
				anonymous.src = "anon.png";
			}
		}
	</script>-->
</body>
</html>
