<?php


include("function.php");

if(isset($_POST['submit']))
{

$subject=$_POST['subject'];
$from=$_POST['from'];
 $to=$_POST['to'];
 $leave=$_POST['leave'];
 $reason=$_POST['reason'];
 $comment=$_POST['comment'];

 $id=$_POST['id'];



dupdate($comment,$id);




  
}