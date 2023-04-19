<?php

include("function.php");

if(isset($_POST['submit']))
{

echo $currentdate=$_POST['date'];
echo $currenttime=$_POST['time'];

echo $employeename=$_POST['name'];
echo $employeeid=$_POST['id'];




attendance($currentdate,$currenttime,$employeename,$employeeid);
}


?>