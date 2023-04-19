<?php
session_start();
include("dbconnect.php");
function HRMinbsert($email,$password)
{

    global $mysqli;


     $sql= "SELECT * FROM login WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($mysqli,$sql);
    
    $row=mysqli_fetch_array($result);
    $resultcheck=mysqli_num_rows($result);
    if($resultcheck>0){
    $_SESSION['login']=true;
     $_SESSION['email']=$row['email'];
     $_SESSION['username']=$row['username'];
     $_SESSION['id']=$row['id'];

    return true;
    }
    else
    
    {
    
    return false;



}
}
function employeeinbsert($employeename,$employeedob,$employeeage,$employeeemail,$employeesalary,$employeephone,$employeejob,$department,$employeequalification,$employeeaddress,$wrokingexperience,$employeeeducation,$lastcompany,$priviascompany)
{

    global $mysqli;


 $sql="INSERT INTO employee (`name`, `dateofbirth`, `age`,`email`,`salary`, `phone`, `jobposition`,`department`,`qualification`, `address`, `workingexperience`,`education`,`lastcompany`, `priviascompany`)
VALUES ('$employeename','$employeedob','$employeeage','$employeeemail','$employeesalary','$employeephone','$employeejob','$department','$employeequalification','$employeeaddress','$wrokingexperience','$employeeeducation','$lastcompany','$priviascompany')";
mysqli_query($mysqli,$sql);


$sqlinsert="INSERT INTO login(`email`,`password`,`username`)
VALUES ('$employeeemail','welcome','$employeename')";
mysqli_query($mysqli,$sqlinsert);

echo "<script>alert('Your Details are Saved')</script>";

}
function employee()
{
    global $mysqli;
    
    
    $sql="SELECT * FROM `employee` ";
    $result=mysqli_query($mysqli,$sql);
    
    return $result;
}

function employeeview($id)
{
    global $mysqli;
    
    
    $sql="SELECT * FROM `employee` where `id`='$id'";
    $result=mysqli_query($mysqli,$sql);
    
    return $result;
}

function viewuser($username)
{
    global $mysqli;
    
    
    $sql="SELECT * FROM `employee` where `Name`='$username'";
    $result=mysqli_query($mysqli,$sql);
    
    return $result;
}
function leavee($staff,$idnum,$subject,$from,$to,$leave,$reason)
{

    global $mysqli;


 $sql="INSERT INTO leavereason (`staff`,`idnum`,`subject`,`from`,`to`,`leave`,`reason`)
VALUES ('$staff','$idnum','$subject','$from','$to','$leave','$reason')";
mysqli_query($mysqli,$sql);

echo "<script>alert('Your Details are Saved')</script>";

}

function leavereason()
{
    global $mysqli;
    
    
    $sql="SELECT * FROM `leavereason`";
    $result=mysqli_query($mysqli,$sql);
    
    return $result;
}
function leave($id)
{
	global $mysqli;
    
    
    $sql="SELECT * FROM `leavereason` where`id`='$id'";
    $result=mysqli_query($mysqli,$sql);
    
    $sql ="UPDATE `leavereson` SET `staff`='$staff',`idnum`='$idnum',`subject`='$subject',`from`='$from',`to`='$to',`leave`='$leave',`reason`='$reason'where `id`='$id'";

    return $result;
}
function update($staff,$idnum,$subject,$from,$to,$leave,$reason,$id)
{

    global $mysqli;


    $sql ="UPDATE `leavereason` SET `staff`='$staff',`idnum`='$idnum', `subject`='$subject',`from`='$from',`to`='$to',`leave`='$leave',`reason`='$reason'where `id`='$id'";
   $result= mysqli_query($mysqli,$sql);


   $sqlselect="SELECT * FROM  `leavereason` where `id`='$id'";
   $resultselect=mysqli_query($mysqli,$sqlselect);
   $value=mysqli_fetch_array($resultselect);

    $sql ="UPDATE `leavereason` SET `staff`='$staff',`idnum`='$idnum',`subject`='$subject',`from`='$from',`to`='$to',`leave`='$leave',`reason`='$reason'where `id`='$id'";
   $subjectvalue=$value['subject'];
   $fromvalue=$value['from'];
   if($subject==$subjectvalue &&  $fromvalue==$from)
   {

    $cast="1";
    return $cast ;
   }

else
{

    $cast="0";
    return $cast ;
}
}

function employeeupdate($Name,$dateofbirth,$age,$email,$salary,$phone,$jobposition,$department,$qualification,$address,$workingexperience,$education,$lastcompany,$priviascompany,$id)

{

    global $mysqli;


   
   

  

   $sql ="UPDATE `employee` SET `name`='$Name',`dateofbirth`='$dateofbirth',`age`='$age',`email`='$email',`salary`='$salary',`phone`='$phone',`jobposition`='$jobposition',`department`='$department',`qualification`='$qualification',`address`='$address',`workingexperience`='$workingexperience',`education`='$education',`lastcompany`='$lastcompany',
   `priviascompany`='$priviascompany' where `id`='$id'";
   $result= mysqli_query($mysqli,$sql);
}
function comment($staff,$idnum,$subject,$from,$to,$leave,$reason,$comment,$status,$id)
{

    global $mysqli;

    $sql="SELECT * FROM  `leavereason` where `id`='$id'";
    $result=mysqli_query($mysqli,$sql);
    
    $sql ="UPDATE `leavereason` SET `staff`='$staff',`idnum`='$idnum', `subject`='$subject',`from`='$from',`to`='$to',`leave`='$leave',`reason`='$reason',`comment`='$comment',`status`='$status' where `id`='$id'";
   $result= mysqli_query($mysqli,$sql);
}

function cmd($comment,$id)
{

    global $mysqli;
    $status="approve";
    $sql ="UPDATE `leavereason` SET `comment`='$comment',`status`='$status' where `id`='$id'";
    mysqli_query($mysqli,$sql);

}

function dupdate($comment,$id)
{

    global $mysqli;
    $status="declare";
    $sql ="UPDATE `leavereason` SET `comment`='$comment',`status`='$status' where `id`='$id'";
    mysqli_query($mysqli,$sql);

}
function attendance($currentdate,$currenttime,$employeename,$employeeid)
{

    global $mysqli;


 $sql="INSERT INTO attendance (`date`,`checkin`,`name`,`employeeid`)
VALUES ('$currentdate','$currenttime','$employeename','$employeeid')";
mysqli_query($mysqli,$sql);



echo "<script>alert('Your Details are Saved')</script>";


}
function attendanceviwe()
{
    global $mysqli;
    
    
    $sql="SELECT * FROM `attendance`";
    $result=mysqli_query($mysqli,$sql);
   
    
    
    return $result;
}
function checkout($employeeid,$checkout)
{

    global $mysqli;

$date=date("Y-m-d");
 $sql ="UPDATE `attendance` SET `checkout`='$checkout' where `employeeid`='$employeeid' and `date`='$date'";
   $result= mysqli_query($mysqli,$sql);

 echo "<script>alert('Your Details are Saved')</script>";

}


function attendanceviwedate($date)
{
    global $mysqli;
    
    $date=date("Y-m-d");
    $sql="SELECT * FROM `attendance` where `date`='$date'";
    $result=mysqli_query($mysqli,$sql);
   
    
    
    return $result;
}


function checkinvalues()
{
    global $mysqli;
    
    date_default_timezone_set("Asia/Kolkata");
 $currenttime = date('h:i:s a', time());
   $sql="SELECT count(id) as ccid FROM `timesetting` where `starttime`<='$currenttime' and `endtime`>='$currenttime' and `attendancetime`='CHECKIN'";
    $result=mysqli_query($mysqli,$sql);
    return $result;
}

function checkoutvalues()
{
    global $mysqli;
    
    date_default_timezone_set("Asia/Kolkata");
 $currenttime = date('h:i:s', time());
   $sql="SELECT count(id) as ccid FROM `timesetting` where `starttime`<='$currenttime' and `endtime`>='$currenttime' and `attendancetime`='CHECKOUT'";
    $result=mysqli_query($mysqli,$sql);
    return $result;
}
function staff()
{
    global $mysqli;
    
    
    $sql="SELECT count(id) as manid FROM `employee` where `jobposition`='manager'";
    $result=mysqli_query($mysqli,$sql);
    return $result;
}
function staffemployee()
{
    global $mysqli;
    
    
    $sql="SELECT count(id) as employeeid FROM `employee` where `jobposition`='employee'";
    $result=mysqli_query($mysqli,$sql);
    return $result;
}
function firstcount()
{
    global $mysqli;
    
    
    $sql="SELECT count(id) as salaryid FROM `employee` where `salary`='10000'";
    $result=mysqli_query($mysqli,$sql);
    return $result;
}
function secontcount()
{
    global $mysqli;
    
    
    $sql="SELECT count(id) as secid FROM `employee` where `salary`='20000'";
    $result=mysqli_query($mysqli,$sql);
    return $result;
}
function thirdcount()
{
    global $mysqli;
    
    
    $sql="SELECT count(id) as third FROM `employee` where `salary`='30000'";
    $result=mysqli_query($mysqli,$sql);
    return $result;
}
function fourthcount()
{
    global $mysqli;
    
    
    $sql="SELECT count(id) as fourth FROM `employee` where `salary`='40000'";
    $result=mysqli_query($mysqli,$sql);
    return $result;
}
function fifthcount()
{
    global $mysqli;
    
    
    $sql="SELECT count(id) as fifth FROM `employee` where `salary`='50000'";
    $result=mysqli_query($mysqli,$sql);
    return $result;
}
function login($username)
{

    global $mysqli;


 $sql="INSERT INTO loginreg (`email`)
VALUES ('$username')";
mysqli_query($mysqli,$sql);


}
function mediacountuser($mediasource)
{

  global $mysqli;
 $sql="select count(id) as count from `employee` where `qualification`='$mediasource'";
$mediacount=mysqli_query($mysqli,$sql);

$oresd=mysqli_fetch_array($mediacount);

$countmedia=$oresd['count'];
return $countmedia;
}
function mediaout()
{

	global $mysqli;


 $sql="SELECT distinct `qualification` FROM `employee`  where `qualification`!=''";
$result=mysqli_query($mysqli,$sql);
return $result;

}
function lc($mediasource)
{

  global $mysqli;
 $sql="select count(id) as count from `loginreg` where `email`='$mediasource'";
$mediacount=mysqli_query($mysqli,$sql);

$oresd=mysqli_fetch_array($mediacount);

$countmedia=$oresd['count'];
return $countmedia;
}
function loginchart()
{
 "hi";

	global $mysqli;


 $sql="SELECT distinct `email` FROM `loginreg`  where `email`!=''";
$result=mysqli_query($mysqli,$sql);
return $result;

}
?>


