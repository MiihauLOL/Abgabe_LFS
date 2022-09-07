<?php


$serverName= "188.166.79.52:3306";
$dBUsername= "artur";
$dBPassword= "root";
$dBName= "website_login";


$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if(!$conn)
{  
  die("Connection failed: " . mysqli_connect_error());
  
}