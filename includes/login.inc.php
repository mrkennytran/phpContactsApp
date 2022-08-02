<?php

if(isset($_POST['login-submit'])){ //
    require 'dbh.inc.php';

    $mailuid = $_POST['mailuid'];//info user tried to login with ; give option to use either username or email 
    $password = $_POST['pwd'];

    //check if user left entry empty 
    if(empty($mailuid) || empty($password)){
        header("Location: ../index.php");
        exit();    
    }else {
        $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();    
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid); //checks for same parameter in same place? 
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
                $pwdCheck = password_verify($password, $row['pwdUsers']); //user entry and db password and see if they match 
                if($pwdCheck == false){
                    header("Location: ../index.php?error=wrongpwd");
                    exit();    
                } else if($pwdCheck == true){
                    session_start();
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userUId'] = $row['uidUsers'];

                    header("Location: ../index.php?login=success");
                    exit();    
                }
            } else {
                header("Location: ../index.php?error=nouser");
                exit();    
            }

        }//end else 
    }//end else if 

} else {
    header("Location: ../index.php?error=emptyfields");
    exit();     
}

//pure php file so php close not needed 