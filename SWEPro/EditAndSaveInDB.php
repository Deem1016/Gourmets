<?php
include 'connectDB.php';
session_start();
$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['name'])) {
            $name = mysqli_real_escape_string($connection, $_POST['name']);
            $sqlUpdate1 = "UPDATE restaurants SET ResName= '$name' WHERE ResID='$id'";
            $result1 = mysqli_query($connection, $sqlUpdate1);
    } 
    
    if (isset($_POST['des'])) {
            $des = mysqli_real_escape_string($connection, $_POST['des']);
            $sqlUpdate2 = "UPDATE restaurants SET description= '$des' WHERE ResID='$id'";
            $result2 = mysqli_query($connection, $sqlUpdate2);
    } 
    
    if (isset($_POST['type'])) {
           
            $type = mysqli_real_escape_string($connection, $_POST['type']);
            $sqlUpdate3 = "UPDATE restaurants SET type= '$type' WHERE ResID='$id'";
            $result3 = mysqli_query($connection, $sqlUpdate3);
        }
    
    if (isset($_POST['phone'])) {
            $phone = mysqli_real_escape_string($connection, $_POST['phone']);
            $sqlUpdate4 = "UPDATE restaurants SET phoneNumber='$phone' WHERE ResID='$id'";
            $result4 = mysqli_query($connection, $sqlUpdate4);
    }
    
    if (isset($_FILES["file"]["name"])){
        $file = $_FILES["file"]["name"];
            if ($file != '') {
                $targetDir = "Images/";
                if (!is_dir($targetDir)) {
                    umask(mask: 0);
                    mkdir($targetDir, 0775);
                }
             $file0Name = $_FILES["file"]["name"];
            $targetFilePath0 = $targetDir.basename($_FILES["file"]["name"]);
            move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath0);
            $attach = $targetFilePath0;
            $sqlUpdate5 = "UPDATE restaurants SET logoImg= '$attach'  WHERE ResID='$id'";
            $result5 = mysqli_query($connection, $sqlUpdate5);
            }
    }
     header("Location: ViewRest.php?id=" . $id);
}


?>
