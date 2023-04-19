<?php

include("function.php");

if(isset($_POST['submit']))
{

$currentdate=$_POST['date'];
$checkout=$_POST['time'];
 $employeename=$_POST['name'];
 $employeeid=$_POST['id'];
 




checkout($employeeid,$checkout);
}

?>
<script>window.location='http://127.0.0.1/HRM/pages/examples/index1.php';</script>
