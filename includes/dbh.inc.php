<?php

$servername = "containers-us-west-90.railway.app"; //name servername if using xamp or get server name on dashboard if online hosting 
$dBUsername = "root";
$dBPassword = "vBhkzPmZNKlmq2EftXY2";
$dBName = "railway";
$port = "6169";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName, $port);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
