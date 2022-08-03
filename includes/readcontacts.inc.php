<?php
require 'dbh.inc.php'; //will this allow variables declared from other php files to be used here?


$sql = 'SELECT * FROM addresses';

//set query and retrieve results
$result = mysqli_query($conn, $sql);

//fetch rows as an array 
$addresses = mysqli_fetch_all($result, MYSQLI_ASSOC);

//flush results to free memory
mysqli_free_result($result);

mysqli_close($conn);


echo $addresses[0]['address_id'];
//print_r($addresses[0]);

print_r($addresses[0]['address_id']);

/*
foreach($addresses as $entry){
    echo $entry['address_id'];
}
*/

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
