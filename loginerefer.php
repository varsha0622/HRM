<?php
error_reporting("0");
include("function.php");


 $email=$_POST['email'];
 $password=$_POST['password'];
$login=HRMinbsert($email,$password);

if($login=="1")
{
    ?>
<script>window.location='index1.php';</script>
    <?php
}

else
{


    echo "<script>alert('You haved Entered Wrong Email / Password')</script>";

    
    ?>

<script>window.location='login.php';</script>

    <?php

}
?>