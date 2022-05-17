<?php

$connection = mysqli_connect("localhost", "root", "root", "Gourmets");

if(!$connection) {
    die("<script>alert('Connection failed!')</script>");
}
