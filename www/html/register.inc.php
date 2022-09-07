<?php

if(isset($_POST["submit"])){

$name = $_POST["name"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];
$pwd2 = $_POST["pwd2"];

require_once 'dbh.inc.php';
require_once 'functions.inc.php';



if (emptyInputSignup($name, $email, $pwd, $pwd2) !== false)
{
  header("location: register.php?error=emptyinput");
  exit();
}

if (invalidEmail($email) !== false)
{
  header("location:register.php?error=invalidemail");
  exit();
}
if (pwdMatch($pwd, $pwd2) !== false)
{
  header("location:register.php?error=passwordsdontmatch");
  exit();
}
if (emailExists($conn, $email) !== false)
{
  header("location:register.php?error=emailtaken");
  exit();
}




 createUser($conn, $name, $email, $pwd, $pwd2);

}
else{

header("location: register.php");
exit();
}
