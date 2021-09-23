<?php
include ('../Myconnect.php');

$email=$_POST['useremail'];
$password=$_POST['pass1'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mobile=$_POST['mobno'];
$grade=$_POST['course'];
$city=$_POST['city'];
$type="jobseeker";

$query1="INSERT INTO user (email,password,type) VALUES ('$email','$password','$type')";
    $result1 = mysqli_query($conn,$query1) or die("Cant Register , The user email may be already existing");
$query2 =  "INSERT INTO jobseeker (email,fname,lname,phone,location,qualification)
                VALUES ('$email','$fname','$lname','$mobile','$city','$grade')";
$result2 = mysqli_query($conn,$query2);
if (!mysqli_query($conn,$query2))
{
 echo("Error description: " . mysqli_error($db1));
}
else{
    echo"<script type='text/javascript'>alert('Registration Successfull!')
    </script>";
    header("Location:../login.php");
}

?>