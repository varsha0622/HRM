
<?php


include("function.php");

if(isset($_POST['submit']))
{

$Name=$_POST['name'];
$dateofbirth=$_POST['dateofbirth'];
 $age=$_POST['age'];
 $email=$_POST['email'];
 $salary=$_POST['salary'];
 $phone=$_POST['phone'];
  $jobposition=$_POST['job'];
 $department=$_POST['department'];
 $qualification=$_POST['qualification'];
 $address=$_POST['address'];
 $workingexperience=$_POST['wrokingexperience'];
 $education=$_POST['education'];
 $lastcompany=$_POST['lastcompany'];
 $priviascompany=$_POST['priviascompany'];

$id=$_POST['id'];




$result=employeeupdate($Name,$dateofbirth,$age,$email,$salary,$phone,$jobposition,$department,$qualification,$address,$workingexperience,$education,$lastcompany,$priviascompany,$id);




    echo "<script>alert('Your Details are Updated')</script>";

    echo "<script>window.location='history.php';</script>";


}
?>