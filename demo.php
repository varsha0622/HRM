<?php
include("function.php");

if(isset($_POST['submit']))
{

echo $subject=$_POST['subject'];
echo $from=$_POST['from'];

echo $to=$_POST['to'];
echo $leave=$_POST['leave'];
echo $reason=$_POST['reason'];





leavee($subject,$from,$to,$leave,$reason);


}


?>