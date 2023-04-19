<?php
$host = 'localhost';  
$email = 'root';  
$pass = ''; 
$dbname='data'; 
$mysqli = new mysqli($host, $email, $pass, $dbname);
//$conn = mysqli_connect($host, $user, $pass,$dbname); 
if(! $mysqli )  
{  
  die('Could not connect: ' . mysqli_error());  
} 
?>