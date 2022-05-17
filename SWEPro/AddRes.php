<?php
include 'connectDB.php';
session_start();
?>

<!DOCTYPE html>
<html>
    <?php
    if (isset($_POST['submit'])) {
        
        $name = $_POST['ResName'];
        $des = $_POST['des'];
        $ResType = $_POST['ResType'];
        $phone = $_POST['phone'];
        
        $sqlName = "SELECT * FROM `restaurants` WHERE ResName = '$name'";
        $resultName  = mysqli_query($connection, $sqlName);
        if(mysqli_num_rows($resultName)==0){
            
        if ($_FILES["fileToUpload"]["name"] == null) {
            $attach = "empty";
        } else {
            $targetDir = "Images/";
            if (!is_dir($targetDir)) {
                umask(mask: 0);
                mkdir($targetDir, 0775);
            }
            $file0Name = $_FILES["fileToUpload"]["name"];
            $targetFilePath0 = $targetDir.basename($_FILES["fileToUpload"]["name"]);
            //$fileType0 = pathinfo($targetFilePath0, PATHINFO_EXTENSION);
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFilePath0);
            $attach = $targetFilePath0;
        }
        
        $sql = "INSERT INTO restaurants (ResName  ,description,logoImg, type ,phoneNumber ) Values ( '" .  $name . "' , '" .  $des . "' , '" . $attach. "' , '" . $ResType. "' , '" .  $phone. "')";
        
         if($result = mysqli_query($connection, $sql)){
          header("Location: AdminHome.php"); 
         }
    }else{
        echo '<script type ="text/JavaScript">';  
        echo 'alert("This restaurant is already exists.")';  
        echo '</script>'; 
    }
    }
    ?>
    <head>
        <title>Add restaurant</title>
        <link rel ="stylesheet"  href="AddResCSS.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="AdminHomeCSS.css">
            <script src="EditResJava.js"> </script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
            <script>
                function myFun(){
                     y = document.getElementById("deem-text").value;
    z= document.getElementById("deem-text2").value;
    x = document.getElementById("deem-textarea").value;

    myphone=document.Myform.phone.value;
                    if(isNaN(myphone)){
          alert("phone number must be all digits");
          return false;
        }

      if(y =="" || x =="" || z=="" || myphone ==""){
          alert("Pleasse fill all the filde");
          return false;
          
      }
      
      alert ("Your work has been saved successfully");
                }
            </script>
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
    
        
        
    
    <main id="myMain">
        
        <form id="Myform" name="Myform" method="POST" action="AddRes.php" enctype="multipart/form-data" onsubmit="return myFun()">
            
                <legend> Add your restaurant</legend>
                <div class="underline"></div>
                <br>
                <ul style="text-align: left; color: black;">
                    <p>
                        <li><label>Enter your restaurant name: <br><input name="ResName" type="text" id="deem-text"> </label></li>
                    </p>
                    <br>
                    <hr id="hr" >
                    <br>
                    <p>
                        <li><label>Short description about your restaurant:<br> <textarea name ="des"  id ="deem-textarea" rows = "6" cols ="64" ></textarea> </label> </li>
                       <!-- <input type="text" value="" id="text" size="30"> --> 
                    </p>
                    <br>
                    <hr id="hr" >
                    <br>
                    <p>
                        <li><label>Restaurant type: <br><input name="ResType" type="text" id="deem-text2"> </label></li>
                    </p>
                    <br>
                    <hr id="hr">
                    <br>
                    <p>
                        <li><label>phone: <br><input id="deem-text" type="tel" name="phone" placeholder="05xxxxxxxx"  ></label></li>
                    </p>
                    <br>
                    <hr id="hr">
                    <br>
                    <p>
                        <li><label>Upload your restaurant logo:<br><br><input type="file" id="myfile" name="fileToUpload" accept=" .png, .jpg,.jpeg, .gif, .icon" style="margin-left: 3%;" > </label></li>
                     </p>
                </ul>
                <input id="myinput" type="submit" name = "submit" value="Add"  /> 
            
        </form>
        <br> <br>
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