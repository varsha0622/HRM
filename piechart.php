<?php

include("function.php");

if(isset($_POST['submit']))
{

echo $employeename=$_POST['Name'];
echo $employeedob=$_POST['dob'];

echo $employeeage=$_POST['age'];
echo $employeeemail=$_POST['email'];
echo $employeesalary=$_POST['salary'];
echo $employeephone=$_POST['phone'];
echo $employeejob=$_POST['jobposition'];
echo $department=$_POST['selected'];
echo $employeequalification=$_POST['qualification'];
echo $employeeaddress=$_POST['address'];
echo $wrokingexperience=$_POST['wrokingexperience'];
echo $employeeeducation=$_POST['education'];
echo $lastcompany=$_POST['lastcompany'];
echo $priviascompany=$_POST['priviascompany'];




employeeinbsert($employeename,$employeedob,$employeeage,$employeeemail,$employeesalary,$employeephone,$employeejob,$department,$employeequalification,$employeeaddress,$wrokingexperience,$employeeeducation,$lastcompany,$priviascompany);


}


?>