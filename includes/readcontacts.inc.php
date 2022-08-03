<?php
require 'dbh.inc.php'; //will this allow variables declared from other php files to be used here?


$sql = 'SELECT * FROM addresses';

$result = mysqli_query($conn, $sql);

$people = mysqli_fetch_all($result, MYSQLI_ASSOC);

print_r($people);

/*
mysql_select_db('contacts_db');
$retval = mysql_query( $sql, $conn );

if(! $retval ) {
    die('Could not get data: ' . mysql_error());
}

while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
    echo "User ID :{$row['user_id']}  <br> ".
       "First Name : {$row['first_name']} <br> ".
       "Last Name : {$row['last_name']} <br> ".
       "--------------------------------<br>";
}

echo "Fetched data successfully\n";

mysql_close($conn);

*/

/*
$retval = mysql_query($sql, $conn);

if(!$retval){
    die('Could not get data: ' . mysql_error());
}

while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
    echo "User ID :{$row['user_id']}  <br> ".
       "First Name : {$row['first_name']} <br> ".
       "Last Name : {$row['last_name']} <br> ".
       "--------------------------------<br>";
}

echo "Fetched data successfully\n";

*/
