<?php
include 'connectDB.php';

$id = $_GET['ResID'];
$sql = "SELECT * FROM `restaurants` WHERE ResID= $id";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['ResName'];
$desc = $row['description'];
$type = $row['type'];
$phoneNumber = $row['phoneNumber'];

if($row['logoImg'] != "empty" )
$logo = $row['logoImg'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit restaurant</title>
        <link rel ="stylesheet"  href="AddResCSS.css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="AdminHomeCSS.css">
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

    <body >

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
        <form id="Myform" name="Myform" method="POST" action="EditAndSaveInDB.php?id=<?php echo $id ?>" enctype='multipart/form-data' onsubmit="return myFun()" >
            
                <legend> Edit your restaurant</legend>
                <div class="underline"></div>
                <ul style="text-align: left; color: black;">
                    <br>
                    <p>
                        <li><label>Enter your restaurant name: <br><input type="text" name='name' id="deem-text" value="<?php echo $name ?>"> </label></li>
                    </p>
                    <br>
                    <hr id="hr" >
                    <br>
                    <p>
                        <li><label>Short description about your restaurant:<br> <textarea name ="des"  id ="deem-textarea" rows = "6" cols ="64" ><?php echo $desc ?></textarea> </label> </li>
                       <!-- <input type="text" value="" id="text" size="30"> --> 
                    </p>
                    <br>
                    <hr id="hr" >
                    <br>
                    <p>
                    <li><label>Restaurant type: <br><input name="type" type="text" id="deem-text2" value="<?php echo $type ?>" > </label></li>
                    </p>
                    <br>
                    <hr id="hr">
                    <br>
                    <p>
                    <li><label>phone: <br><input id="deem-text" type="tel" name="phone" value="<?php echo $phoneNumber ?>" placeholder="05xxxxxxxx"></label></li>
                    </p>
                    <br>
                    <hr id="hr">
                    <br>
                    <p>
                        <?php
                        if($row['logoImg'] != "empty" )
                        echo "<img src=\"" . $logo . "\" height=\"300px\" width=\"600px\" alt='attachment1'><br>";
                        ?>
                        <li><label>Upload your restaurant logo:<br><br><input type="file" accept=" .png, .jpg,.jpeg, .gif, .icon" id="myfile" name="file" style="margin-left: 3%;"> </label></li>
                     </p>
                </ul>
                <input id="myinput" type="submit" value="Edit" /> 
            
        </form>
        <br> <br>
    </main>
     
    

    <footer>
      
        
    </footer>


    </body>
</html>