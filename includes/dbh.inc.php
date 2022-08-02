<?php

$servername = "localhost"; //name servername if using xamp or get server name on dashboard if online hosting 
$dBUsername = "root";
$dBPassword = "";
$dBName = "loginform";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}