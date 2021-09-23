<?php
include('../Myconnect.php');
$email=$_POST['email'];
$password=$_POST['pass1'];
$cname=$_POST['compname'];
$addr=$_POST['addr'];
$pin=$_POST['pin_code'];
$fperson=$_POST['fperson'];
$lperson=$_POST['lperson'];
$phone=$_POST['phone'];
$city=$_POST['city'];
$about=$_POST['cmpinfo'];

$query1="INSERT INTO user (email,password,type) VALUES ('$email','$password','employer')";
$result1 = mysqli_query($conn,$query1) or die("Cant Register , The user email may be already existing");
$query2 =  "INSERT INTO employer (email,fname,lname,phone,companyname,location,address,pincode,about)
                VALUES ('$email','$fperson','$lperson','$phone','$cname','$city','$addr','$pin','$about')";

if (!mysqli_query($conn,$query2))
{
    echo("Error description: " . mysqli_error($conn));
}
else{
    echo" <script language='javascript'>alert('Successfully Registered!')</script>";
    header('location:../login.php');
}
?>