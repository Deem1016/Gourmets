<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="index.css">
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
				<li><a href="index.php" accesskey="h">Home</a> </li>
				
				<li><a href="#" >About Us</a></li> <!-- Add link here please -->
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
			<h1>About Us</h1>
			<p>
			Gourmets was founded in 2022 with a vision to create an independent currency of trust. 
			We're free to use, open to everybody, and built on transparency.
Gourmet's hosts reviews to help consumers eat with confidence, and deliver rich insights to help restaurants improve the experiences they offer.
			</p>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 319">
				<path id="chngcolor" fill-opacity="1"
					d="M0,128L80,122.7C160,117,320,107,480,122.7C640,139,800,181,960,192C1120,203,1280,181,1360,170.7L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
				</path>
			</svg>
		</div>
	</div>

<!-- WEBSITE USER START------------------------------------------------------------------------>
  <div class="servicecard">
            <div class="servicecardtitle ">
               <h1>Do you want to share your opinion with us?</h1> 
               <div class="underline"></div>
            </div>
            <div class="sbox-container" >
                <div class="s-box">
                    <img src="Images/1.jpg" id="img0" alt="add">
                    <h2>Want to review a restaurant? Create an account now!</h2>
                    <a href="signup.php" class="readmorebtn">Sign Up</a> <!-- ADD LINK HERE PLEASE -->
                </div>
                <div class="s-box">
                    <img src="Images/2.jpg" id="img1" alt="log">
                    <h2>Already have an account?</h2>
                    <a href="login.php" class="readmorebtn">Log In</a> <!-- ADD LINK HERE PLEASE -->
                </div>
        <!--   <div class="s-box">
                <img src="" id="img2" alt="more">
                <h2></h2>
                <a href="#" class="readmorebtn">Read More </a> PS. This was made just incase we have more functions
            </div> --> 
        </div>
  </div>

<!-- WEBSITE ADMIN START------------------------------------------------------------------------>

  <div class="servicecard">
    <div class="servicecardtitle ">
       <h1>Do you have a restaurant? join us!</h1> 
       <div class="underline"></div>
    </div>
    <div class="sbox-container" >
        <div class="s-box">
            <img src="Images/3.webp" id="img0" alt="add">
            <h2>Want to add your restaurant?</h2>
            <a href="signupadmin.php" class="readmorebtn">Sign Up</a> <!-- ADD LINK HERE PLEASE -->
        </div>
        <div class="s-box">
            <img src="Images/4.jpg" id="img1" alt="log">
            <h2>Already have a restaurant?</h2>
            <a href="loginAdmin.php" class="readmorebtn">Log In</a> <!-- ADD LINK HERE PLEASE -->
        </div>
<!--   <div class="s-box">
        <img src="" id="img2" alt="more">
        <h2></h2>
        <a href="#" class="readmorebtn">Read More </a> PS. This was made just incase we have more functions
    </div> --> 
</div>
</div>


<!-- RESTAURANTS  START------------------------------------------------------------------------>

  <div class="servicecard">
    <div class="servicecardtitle ">
       <h1>Restaurants</h1> 
       <div class="underline"></div>
    </div>
    <div class="sbox-container" >
        <div class="s-box">
            <img src="Images/img1.jpeg" id="img0" alt="add">
            <h2>View All Restaurants </h2>
            <a href="Restaurants.php" class="readmorebtn">Click Here! </a> <!-- ADD LINK HERE PLEASE -->
        </div>
        
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

	
</body>
</html>
