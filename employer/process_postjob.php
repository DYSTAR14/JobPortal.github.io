<?php
include('../Myconnect.php');
session_start();
$eid=$_SESSION['eid'];
$desig=$_POST['desig'];
$vacno=$_POST['vacno'];
$desc=$_POST['jobdesc'];
$salary=$_POST['pay'];
$fnarea=$_POST['fnarea'];
$course=$_POST['course'];
$profile=$_POST['profile'];
$date=date('y-m-d');

$query="insert into ads (eid,title,jobdesecho"<p><u><br><br>JOB DESCRIPTION:".$resultset['jobdesc']."</u></p>";c,vacno,salary,location,course,jprofile,postdate )VALUES ('$eid','$desig','$desc','$vacno','$salary','$fnarea','$course','$profile','$date')";

if (!mysqli_query($conn,$query))
{
 echo("Error description: " . mysqli_error($conn));
}
else{
    header('location:profile.php?msg=jobposted');
}
?>