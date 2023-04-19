<?php


include("function.php");

if(isset($_POST['submit']))
{

$subject=$_POST['subject'];
$from=$_POST['from'];
 $to=$_POST['to'];
 $leave=$_POST['leave'];
 $reason=$_POST['reason'];
$id=$_POST['id'];




$result=update($subject,$from,$to,$leave,$reason,$id);


if($result=="1")
{

    echo "<script>alert('Your Details are Updated')</script>";

    echo "<script>window.location='view.php';</script>";

}

else
{

    echo "<script>alert('Your Details are Not Updated')</script>";
    echo "<script>window.location='view.php';</script>";
}
}?>