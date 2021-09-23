<?php
include('../Myconnect.php');
$q1=mysqli_query($conn,"select * from application where aid=$_GET[jobid]");
$q3=mysqli_query($conn,"select * from ads where aid = $_GET[jobid]");
$q3row=mysqli_fetch_array($q3);
session_start();
$emp_id=$_SESSION['eid'];

?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Manage Jobs</title>

</head>
<body>

<div id="nav">
    <nav>
        <div class="navbar" id="insidenav">
            <div class="navbar-header">
            <a class="navbar-brand" href="#">Job Portal</a>
            </div>

            <ul class="nav navbar-nav">
                <li><a href="profile.php"><?php echo $_SESSION['fname']; ?><span class="sr-only">(current)</span></a></li>
                <li class="active"><a href="#">View Applicants</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="post_jobs.php">Post New Jobs</a></li>
                        <li><a href="managejobs.php">Manage Jobs</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Manage Applicants</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="caret"></span></a>
                    <ul class="dropdown-menu">
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

<!-- ----------------------------------------- contents -------------------------------------------------------------------------- -->
<div class="container-fluid">
    <h3 class="text-center" style="margin-top: 50px;">These users have applied for the job : <?php echo $q3row['title'];?></h3>
    <h4 class="text-center">You can view their profile, select or reject them.</h4>
    <div class="page-header" style="background: steelblue"></div>
    <?php if(mysqli_num_rows($q1)>0) { ?>
		<div class="table-responsive">
        <table class="table table-responsive" style="margin-top: 30px;">
            <th>SI NO:</th>
            <th>Full Name:</th>
            <th>Qualification</th>
            <th>Applied Date</th>
            <th colspan="2">Actions</th>
            <?php
            while($row=mysqli_fetch_array($q1)) {
                $user_id=$row['sid'];
                $i=1;
                $q2=mysqli_query($conn,"select * from jobseeker where sid = '$user_id'");
                $result=mysqli_fetch_array($q2);
                    echo " <tr> ";
                    echo "<td>".$i."</td>";
                    echo "<td> <a href='view_js.php?jsid=" . $result['sid'] . "'>".$result['fname'].' '.$result['lname']."</a></td>";
                    echo "<td>".$result['qualification'];
                    echo "<td>".$row['date']."</td>";
                    echo "<tr><td colspan='6'><div id='message'></div></td></tr>";
                    echo "</tr>";
                    $i++;
            }
            ?>
        </table>
        </div>
    <?php } else {  echo " <div class='container'> <div class='alert alert-warning alert-dismissible' role='alert'>
            <button type='button' class='close'  data-dismiss='alert' aria-label='Close'><span
                    aria-hidden='true'>&times;</span></button>
           <p style='font-size: 20px'><strong>Note:</strong> No one applied for this job yet!</p>
        </div> </div>";
    }
    ?>
</div>
<!-- --------------------------------------------------------- contents end --------------------------------------------------------------------- -->
</body>
<link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
<link href="../css/main.css" rel="stylesheet">
<link href="../css/employer.css" rel="stylesheet">
<script src="../js/jquery-1.12.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</html>

