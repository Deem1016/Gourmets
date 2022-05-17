
<?php

session_start();
if (isset($_SESSION["role"])) {
    session_destroy();
    echo '<script>window.location="index.php"; alert("Loged out successfully.");</script>';
} else {
    echo '<script>window.location="index.php"; alert("You don\'t have access to the requested page, please log in first!");</script>';
}


