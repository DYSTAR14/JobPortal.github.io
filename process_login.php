<?php
include('Myconnect.php');

$email=$_POST['email'];
$passd=$_POST['password'];
$query=mysqli_query($conn,"select * from user where email='$email'");
$result=mysqli_fetch_array($query,MYSQLI_ASSOC);
echo"<script>alert('123123')</script>";
if(($result>0) && ( $passd==$result['password'])){
    if($result['type']=="jobseeker")
    {
        session_start();
        $_SESSION["email"] = $result['email'];
        $_SESSION["type"] = $result['type'];
        header('location:jobseeker/profile.php?msg=success');
    }
 else if($result['type']=="employer")
 {
     session_start();
     $_SESSION["email"] = $result['email'];
     $_SESSION["type"] = $result['type'];
     header('location:employer/profile.php?msg=success');
 }
}
else
{
header('location:login.php?'.$result);
}
?>