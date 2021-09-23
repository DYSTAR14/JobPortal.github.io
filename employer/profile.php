<?php
include('../Myconnect.php');
session_start();

$id = $_SESSION['email'];
echo $id;
if(isset($_SESSION['email']) && ($_SESSION['type']=="employer"))
{
$q = "select * from user where email='$id'";
$result = mysqli_query($conn, $q) or die("Selecting user profile failed");
$urow = mysqli_fetch_array($result);
echo $urow['type'];
$q2= "select * from employer where email='$id'";
$result2=mysqli_query($conn,$q2);
$row= mysqli_fetch_array($result2);
//  echo $row['log_id'];
    $_SESSION['eid']=$row['eid'];
    $_SESSION['fname']=$row['fname'];
    $_SESSION['lname']=$row['lname'];
    $_SESSION['companyname']=$row['companyname'];
}
else
{
header('location:../login.php?msg=please_login');
}
if(isset($_GET['msg']) &&  $_GET['msg']=="jobposted") {

    ?>
    <script type="text/javascript"> alert("Job Successfully Posted");</script>
    <?php
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Welcome</title>
</head>
<body>

<div id="nav">
    <nav>
        <div class="navbar" id="insidenav">

            <ul class="nav navbar-nav">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Job Portal</a>
                </div>
                <li class="active"><a href="#">Profile<span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="post_jobs.php">Post Jobs</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="managejobs.php">Manage Jobs</a></li>

                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Account Overview</a></li>
                        <li><a href="#">Account Settings</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Edit Profile</a></li>
                    </ul>
                </li>
                <li><a href="../logout.php">Logout</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</div><!-- /.container-fluid -->
<div class="container-fluid" id="content">

    <aside class="col-sm-3 text-center" role="complementary">
        <div class="region region-sidebar-first well" id="sidebar">
            <h3 class="text-center" style="color: #dd4814"> Welcome <?php echo $row['fname']; ?> </h3> <hr>
            <h4 style="color: red;"></h4>
            <h4> You can post a new job, manage your jobs and update your profile.</h4>
        </div>
        <!-- company logo-->
        <div class="thumbnail text-center">
         <div class="img thumbnail">
            <?php if($row['status']==1) {
                echo "<img src = '../uploads/logo/".$row['companyname'].".jpg' class='img-rounded' >";
            }else echo" <img src='../images/fallbacklogo.jpg'>";
            ?>
           </div> 
            <strong><?php echo $row['companyname']; ?></strong><br>
            <p><button class="btn btn-default" data-toggle="modal" data-target="#changelogo">Change Company Logo
        </div>
<!------------- logo ------------------------------------- -->
   <div class="modal fade" id="changelogo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Change or Upload your Company Logo</h4>
      </div>
      <div class="modal-body">
       <form method="post" action="../upload.php?type=logo" enctype="multipart/form-data">
            <div class="form-group form-inline">
                <label for="file" class="control-label">Select your Logo:</label>
                <input type=file name="file" id="file" class="form-control">
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" id="submit" name="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ----------- change logo ends here ------------------------------------------------- -->
    </aside>
    <section class="col-sm-9">
    <div id="header">
        <h3> Post jobs and find the right candidates!</h3>
    </div>
<div class="container">
    <h3>Company Profile:</h3> <h4>The following informations are visible to job seekers.
        We reccomend you to always update these informations.</h4>
    <hr>
    <table class="table">
        <tr>
            <td class="tbold">Name:</td>
            <td><strong><?php echo $row['companyname']; ?></strong></td>
        </tr>
        <tr>
            <td class="tbold">Address:</td>
            <td><?php echo $row['address']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Pincode:</td>
            <td><?php echo $row['pincode']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Executive Name:</td>
            <td><?php echo $row['fname']." ".$row['lname'];?></td>
        </tr>
        <tr>
            <td class="tbold">Phone Number:</td>
            <td><?php echo $row['phone']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Email:</td>
            <td><?php echo $row['email']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Main Location:</td>
            <td><?php echo $row['location']; ?></td>
        </tr>
        <tr>
            <td class="tbold">About Company:</td>
            <td><?php echo $row['about']; ?></td>
        </tr>
    </table>
    </div>
        </section>
</body>
<link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
<link href="../css/main.css" rel="stylesheet">
<link href="../css/employer.css" rel="stylesheet">
<script src="../js/jquery-1.12.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</html>
