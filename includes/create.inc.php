<?php 
function insert_data($sql) {

}

if(isset($_POST['create-submit'])) { //*** 37:00
  
  require 'dbh.inc.php';

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $nickname = $_POST['nickname'];
  $company = $_POST['company'];
  $website = $_POST['website'];
  $notes = $_POST['notes'];
  $street = $_POST['street'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zipcode = $_POST['zipcode'];
  $country = $_POST['country'];
  $emails = $_POST['emails'];
  $phone_numbers = $_POST['phone_numbers'];

  $fields = array(
    $firstname,
    $lastname,
    $nickname,
    $company,
    $website,
    $notes,
    $street,
    $city,
    $state,
    $zipcode,
    $country,
    $emails,
    $phone_numbers,
  );

  foreach ($fields as &$field) {
    if (empty($field)) {
      header("Location: ../create.php?error=emptyfields");
      exit();
    }
  }

  // INSERT ADDRESS
  $sql = "INSERT INTO addresses 
  (street,city,state,zip,country) 
  VALUES (?,?,?,?,?)";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../create.php?error=sqlerror");
      exit();
    } else {
      mysqli_stmt_bind_param($stmt, "sssss", 
        $street,
        $city,
        $state,
        $zipcode,
        $country
      );

      mysqli_stmt_execute($stmt); //run stmt inside db

      $address_id = $stmt->insert_id;
      mysqli_stmt_close($stmt);
    }

    // INSERT INTO PEOPLE
  $favorite = "0";
  $active = "1";

  $sql = "INSERT INTO people 
  (first_name,last_name,nickname,company,website,notes,favorites,active,address_id) 
  VALUES (?,?,?,?,?,?,?,?,?)"; //using prepared statements - prevent users from corrupting the db 54:00 ? = placeholder for protection

  $stmt = mysqli_stmt_init($conn);

  if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../create.php?error=sqlerror");
      exit();
  } else {
  mysqli_stmt_bind_param($stmt, "ssssssiii", 
    $fields[0],
    $fields[1],
    $fields[2],
    $fields[3],
    $fields[4],
    $fields[5],
    $favorite,
    $active,
    $address_id
  );

    mysqli_stmt_execute($stmt); //run stmt inside db
    $person_id = $stmt->insert_id;
    mysqli_stmt_close($stmt);
  }

  // INSERT emails
  

  // INSERT PHONES


  mysqli_stmt_close($stmt); //closing statement
  mysqli_close($conn); //close connection 

  header("Location: ../create.php?signup=success");
  exit();
} else {
    header("Location: ../create.php");
    exit();     
}
