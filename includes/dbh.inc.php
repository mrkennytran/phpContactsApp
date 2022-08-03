<?php


$server_name = "localhost"; //name servername if using xamp or get server name on dashboard if online hosting 
$db_username = "root";
$db_password = "";
$db_name = "contacts_db"; //loginform

/*
$servername = "containers-us-west-90.railway.app"; //name servername if using xamp or get server name on dashboard if online hosting 
$dBUsername = "root";
$dBPassword = "vBhkzPmZNKlmq2EftXY2";
$dBName = "railway";
$port = "6169";*/



$conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
