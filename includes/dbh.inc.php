<?php


//$servername = "localhost"; //name servername if using xamp or get server name on dashboard if online hosting 
$servername = "containers-us-west-90.railway.app";
$dBUsername = "root";
$dBPassword = "vBhkzPmZNKlmq2EftXY2";
//$dBName = "loginform";
$dBName = "railway";

//added
$port = "6169"; //added

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName, $port);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}