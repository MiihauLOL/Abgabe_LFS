<?php


function emptyInputSignup($name, $email, $pwd, $pwd2)
{
 $result;
 if(empty($name) || empty($email) || empty($pwd) || empty($pwd2)){
 $result = true;
 }
 else{
 $result=false;}
 return $result;
}

function emptyInputLogin($email, $pwd)
{
 $result;
 if(empty($email) || empty($pwd)){
 $result = true;
 }
 else{
 $result=false;}
 return $result;
}

function invalidEmail($email) 
{
 $result;
 if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
 
 $result = true;
 }
 else{
 $result=false;}
 return $result;
}


function pwdMatch($pwd, $pwd2)
{
 $result;
 if($pwd !== $pwd2){
 
 $result = true;
 }
 else{
 $result=false;}
 return $result;
}


function emailExists($conn, $email)
{  $sql= "SELECT * FROM users WHERE email= ?;";
    $stmt = mysqli_stmt_init($conn);
   $result;
 if(!mysqli_stmt_prepare($stmt, $sql)){
   header("location:register.php?error=stmtfailed");
  exit();
 
 }
 
 mysqli_stmt_bind_param($stmt, "s", $email);
 mysqli_stmt_execute($stmt);
 
 $resultData= mysqli_stmt_get_result($stmt);
  if($row = mysqli_fetch_assoc($resultData)){
  return $row;
  
  }
  else{
  $result = false;
  return $result;
  }
  mysqli_stmt_close($stmt);
}


function createUser($conn, $name, $email, $pwd, $pwd2)
{  $sql= "INSERT INTO users (name,email,password) Values(?,?,?);";
    $stmt = mysqli_stmt_init($conn);

 if(!mysqli_stmt_prepare($stmt, $sql)){
   header("location:register.php?error=stmtfailed");
  exit();
 
 }
 
 $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
 
 mysqli_stmt_bind_param($stmt, "sss", $name,$email,$hashedpwd);
 mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  
   header("location:register.php?error=none");
  exit();
}






function loginUser($conn,$email, $pwd)
{ $emailExists = emailExists($conn, $email);

if($emailExists == false) {
header("location:Login.php?error=wronglogin");
exit();
}
$pwdHashed = $emailExists["password"];

$checkPwd = password_verify($pwd, $pwdHashed);

if($checkPwd==false){
header("location:Login.php?error=wronglogin");
exit();
}
else if($checkPwd==true){
session_start();
$_SESSION["id"]= $emailExists["id"];
$_SESSION["email"]= $emailExists["email"];
header("location:index.php");
exit();
}


}



?>