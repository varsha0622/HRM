<?php

include("function4.php");


echo $employeename=$_POST['Name'];
echo $employeedob=$_POST['dateofbirth'];

echo $employeeage=$_POST['age'];
echo $employeeemail=$_POST['email'];
echo $employeesalary=$_POST['salary'];
echo $employeephone=$_POST['phone'];
echo $employeejob=$_POST['jobposition'];
echo $department=$_POST['department'];
echo $employeequalification=$_POST['qualification'];
echo $employeeaddress=$_POST['address'];
echo $wrokingexperience=$_POST['wrokingexperience'];
echo $employeeeducation=$_POST['education'];
echo $lastcompany=$_POST['lastcompany'];
echo $priviascompany=$_POST['priviascompany'];




employeeinbsert($employeename,$employeedob,$employeeage,$employeeemail,$employeesalary,$employeephone,$employeejob,$department,$employeequalification,$employeeaddress,$wrokingexperience,$employeeeducation,$lastcompany,$priviascompany);





?>