<?php
include('../Myconnect.php');
session_start();
$jobid=$_GET['aid'];
$jsid=$_SESSION['sid'];
$date=date("y-m-d");
$eid=$_GET['eid'];
$q1=mysqli_query($conn,"select * from application where aid =$jobid AND sid = $jsid");
if(mysqli_num_rows($q1)>=1){
    echo " <div class='alert alert-danger alert-dismissible' role='alert'>
    <a href='profile.php'>BACK TO PROFILE!</a>
           <p style='font-size: 20px'><strong>Note:</strong> You have already applied for this job!</p>
        </div>";
}
else{

    $query="insert into application (sid,eid,aid,date) VALUES ('$jsid','$eid','$jobid','$date')";
    echo $query;
    $result=mysqli_query($conn,$query);
    $resarray=mysqli_fetch_array($q1);
    
   // echo mysqli_error($db1);
    if($result){
        echo " <div class='alert alert-success alert-dismissible' role='alert'>
            <a href='/profile.php'>BACK TO PROFILE!</a>
           <p style='font-size: 20px'><strong>Note:</strong> You have successfully applied for this job!</p>
        </div>";

    }
    else{
        echo " <div class='alert alert-danger alert-dismissible' role='alert'>
        <a href='profile.php'>BACK TO PROFILE!</a>
           <p style='font-size: 20px'><strong>Oops!:</strong>Sorry ! Failed to apply for this job!</p>
        </div>";
    }


}
?>