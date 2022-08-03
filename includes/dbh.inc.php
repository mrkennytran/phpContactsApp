<?php

$server_name = "astamps78515.ipagemysql.com";
$db_username = "skyler_favors";
$db_password = "Favors721!";
$db_name = "skyler_favors";

echo 'here';

$conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);

echo 'after';

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
