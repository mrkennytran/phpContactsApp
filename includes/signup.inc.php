<?php 
if(isset($_POST['signup-submit'])) { //*** 37:00
    
    require 'dbh.inc.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    //Error handler conditions 
if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat) ) {
    header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
    exit();
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    //If none of the info user enters is correct 
    header("Location: ../signup.php?error=invalidemail&uid");
    exit();
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../signup.php?error=invalidemail&uid=".$username);
    exit();
} else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) { //pregmatic 
    header("Location: ../signup.php?error=invaliduid&mail=".$email);
    exit();
} else if ($password !== $passwordRepeat){
    //Password entry does not match password repeat 
    header("Location: ../signup.php?error=passwordcheck&uid=".username."&mail=".$email); //*** */
    exit();
} else {
    //Using a username that already exists/taken by someone else in the database
    $sql = "SELECT uidUsers FROM users WHERE uidUsers=?"; //using prepared statements - prevent users from corrupting the db 54:00 ? = placeholder for protection
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../signup.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt); //run stmt inside db
        mysqli_stmt_store_result($stmt); //return results from db for any matches
        $resultCheck = mysqli_stmt_num_rows($stmt); //*** */
        if($resultCheck > 0){
            header("Location: ../signup.php?error=usertaken&mail=".$email);
            exit();
        } else {
            $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../signup.php?error=sqlerror");
                exit();
            } else {
                $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd); //switched $password to $hashedPwd for user pw protection                 
                mysqli_stmt_execute($stmt); //run stmt inside db
                header("Location: ../signup.php?signup=success");
                exit();            
            }
        }
    }

}
mysqli_stmt_close($stmt); //closing statement
mysqli_close($conn); //close connection 

} else {
    header("Location: ../signup.php");
    exit();     
}