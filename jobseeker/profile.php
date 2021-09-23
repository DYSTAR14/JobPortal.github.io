<?php

include('../Myconnect.php');
session_start();
$id = $_SESSION['email'];

if(isset($_SESSION['email']) && ($_SESSION['type']=="jobseeker"))
{
    $q = "select * from user where email='$id'";
    $result = mysqli_query($conn, $q) or die("Selecting user profile failed");
    $urow = mysqli_fetch_array($result);
    $_SESSION['email']=$urow['email'];

    $q2= "select * from jobseeker where email='$id'";
    $result2=mysqli_query($conn,$q2);
    $row= mysqli_fetch_array($result2);
    $_SESSION['sid']=$row['sid'];
}
else
{
    header('location:../login.php?msg=please_login');
}
?>
<!DOCTYPE HTML>
<html>
<head>

<title>Profile</title>
</head>
<body>
    

<div id="nav">
    <nav class="navbar">
        <div class="navbar" id="insidenav">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Job Portal</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="profile.php">Profile<span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Options<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="view_applied.php">View Applied Jobs</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="view_selected.php">View Selected Jobs</a></li>
                    </ul>
                </li>
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../logout.php">Logout</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</div><!-- /.container-fluid -->

<!------------------------------------------------------------------------------- -->
<div class="container-fluid" id="content">

<aside class="col-sm-3" role="complementary">
    <div class="region region-sidebar-first well" id="sidebar">
     <h3 style="color: #009999" class="text-center" > Welcome <?php echo $row['fname']; ?> </h3>
     </div>

  <!-- profile pic -->
    <div class="thumbnail text-center">
        <div class="img thumbnail">
           <?php if($row['status']==1) {
            echo" <img src = '../uploads/images/".$row['sid'].".jpg' class='img-circle'>";
             }else echo" <img src='../images/user_fallback.png'>";
           ?>
        </div>
         <strong><?php echo $row['fname'].' '.$row['lname']; ?> </strong>
          <!-- Button trigger modal -->
          <p><button type="button" class="btn btn-default" data-toggle="modal" data-target="#changeimg">Change Image </button></a>
<!--------------------------- profile pic --------------------------------------- -->
<div class="modal fade" id="changeimg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Change or upload your profile image</h4>
      </div>
      <div class="modal-body">
       <form method="post" action="../upload.php?type=image" enctype="multipart/form-data">
            <div class="form-group form-inline">
                <label for="file" class="control-label">Select your photo:</label>
                <input type=file name="file" id="file" accept="image/jpg" class="form-control">
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
<!-- profile pic -->

</aside>

    <!------------------------------------------------------------------------------- -->
<section class="col-sm-7">
<div id="searchcontent">
<!-- Search content overlay div starts here ------------------------------------ --- -->
<div id="header">
<h3> Find jobs, edit your profile or update your current resume for better jobs!</h3>
</div>

<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#details">Your Profile</a></li>
    <li><a data-toggle="tab" href="#resume">Update Resume</a></li>
</ul>

<!------------------------------------------------------------------------------- -->

    <div class="tab-content">

<!------------------------------------------------------------------------------- -->

        <div id="details" class="tab-pane fade in active" style="margin-top: 50px;">
        <h3> Your Profile</h3>
        <table class="table" >
        <tr>
            <td class="tbold">Full Name:</td>
            <td><?php echo $row['fname'].' '.$row['lname']; ?></td>

        </tr>
        <tr>
            <td class="tbold">Email:</td>
            <td><?php echo $row['email']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Phone:</td>
            <td><?php echo $row['phone']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Location:</td>
            <td><?php echo $row['location']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Qualification:</td>
            <td><?php echo $row['qualification']; ?></td>
        </tr>
        <tr>
        <td><a href='../company.php'>Search for jobs</a></td>
        </tr>
    </table>
</div> <!-- profile -->
<!--------------------------------- Resume ---------------------------------------------- -->

    <div id="resume" class="tab-pane fade">
        <div>
    <form action="../upload.php?type=file" enctype="multipart/form-data" method="post">
       <?php if($row['resume']==0){
    echo "<div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close'  data-dismiss='alert' aria-label='Close'><span
                    aria-hidden='true'>&times;</span></button>
           <p style='font-size: 20px'><strong>Note:</strong> You have'nt uploaded a resume file yet! Upload a attractive resume file for a better job!</p>
        </div>";
}?>

        <h4>Upload your updated resume file:</h4>
        <hr style="background-color: darkslateblue;">
        <div class="form-group" >
            <label class="form-group col-sm-3" for="file" style="font-size:16px; ">Select your resume file:(PDF only)</label>
             <div class="col-sm-7 form-inline">
                 <input type="file" name="file" id="resumefile" accept="application/pdf" class="form-control">
                 <button class="btn btn-success" type="submit" name="submit" value="submit">Upload Resume</button>
             </div>
        </div>
    </form>
        <div class="page-header"></div>
        <?php if($row['resume']!=0) {
                echo "<a href = '../uploads/resume/".$row['sid'].".pdf' > Download Your Current Resume File </a >";
         }?>

        <br>

    </div>
    </div> <!-- resume -->
    </div>
<!------------------------------------------------------------------------------- -->
</div> <!-- tab contents -->

</div><!-- closing searchcontent -->
</section>

</div> <!-- main content div -->

</body>
<link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
<link href="../css/main.css" rel="stylesheet">
<link href="../css/jobseeker.css" rel="stylesheet">
<script src="search.js"></script>
<script src="../js/jquery-1.12.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

</html>
