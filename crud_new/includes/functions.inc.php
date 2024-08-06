<?php
function emptyInputSignup($name, $email, $usersid, $pwd, $pwdRepeat){
    $result;
    if (empty($name)  || empty($email) || empty($usersid) || empty($pwd) || empty($pwdRepeat)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}

function invalidUid($uid) {
    if (!preg_match("/^[a-zA-Z0-9]*$/", $usersid)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}


function invalidEmail($email){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}


function pwdMatch($pwd, $pwdRepeat) {
    $result;
    if ($pwd!=="$pwdRepeat") {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $usersid, $email) {
 $sql="SELECT * FROM users WHERE usersid = ? OR email= ?;";
 $stmt= mysqli_stmt_init($conn);
 if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location:../signup.php?error=stmtfailed");
    exit();
 }
 mysqli_stmt_bind_param($stmt, "ss", $usersid, $email);
 mysqli_stme_excute($stmt);

 $resultData=mysqli_stmt_get_result($stmt);

 if($row=mysqli_fetch_assoc($resultData)){
    return $row;
 }else{
    $result=false;
    return $result;
 }

 mysqli_stmt_close($stmt);

}



function createUser($conn, $name, $email, $usersid, $pwd) {
    $sql="INSERT INTO users (name, email, usersid, pwd) VALUES(?,?,?,?);";
    $stmt= mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
       header("location:../signup.php?error=stmtfailed");
       exit();
    }

    $hashedPwd=password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $usersid, $pwd);
    mysqli_stme_excute($stmt);
    mysqli_stmt_close($stmt);
    header("location:../signup.php?error=none");
       exit();

   
    $resultData=mysqli_stmt_get_result($stmt);
   
    if($row=mysqli_fetch_assoc($resultData)){
       return $row;
    }else{
       $result=false;
       return $result;
    }
   
    mysqli_stmt_close($stmt);
   
   }