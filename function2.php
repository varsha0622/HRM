

<?php
include("dbconnect3.php");
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
    echo "succes";
    return true;
    }
    else
    
    {
        echo"failure";
    return false;
    }
    }
    ?>
    
    