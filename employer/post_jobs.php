<?php
session_start();
if(!isset($_SESSION['eid'])){
    header('location:../login.php?msg=please_login');
}
?>
<!DOCTYPE HTML>
<html>
    <head> 
        <title> Post Jobs </title>
         <script>
 </script>
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
                    <li class="active"><a href="#">Job Posting</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="post_jobs.php">Post Jobs</a></li>
                            <li><a href="managejobs.php">Manage Jobs</a></li>

                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Search</button>
                </form>
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


        <div class="container">
        <br/>
        <center><h2>Post Jobs </h2></center>
        <div class="page-header" style="background: #f4511e"></div>
        <h3> Job Details: </h3>
          <div class="page-header" />
        <form id="job_post" role="form" method="post" class="form-horizontal" action="process_postjob.php">
           
            <div class="form-group">
                <label for="desig" class="control-label col-sm-2">Job Title/ Designation:</label>
                 <div class="col-sm-4"> 
                      <input type="text" class="form-control" name="desig" id="desig" required>
                 </div>
            </div>
            
             <div class="form-group">
                  <label for="vac_no" class="control-label col-sm-2">Number of vacancies:</label>
                  <div class="col-sm-2">  <input type="text" name="vacno" class="form-control" id="vac_no" required> </div>
            </div>
            
             <div class="form-group">
                <label for="job_desc" class="control-label col-sm-2">Job Description:</label>
                  <div class="col-sm-5">  <textarea class="form-control" rows="5" id="job_desc" name="jobdesc" required></textarea> </div>
            </div>
             
            <div class="form-inline form-group">
                <label for="pay-div" class="control-label col-sm-2">Basic Pay:</label>
                  <div class="col-sm-4" id="pay-div">
                         <select class="form-control" id="money" name="money"> 
                           <option value="Rs"> Rs </option>
                           </select>
                        <input type="number" class="form-control" id="pay" name="pay" required>
                   </div>
            </div>
            
            <div class="form-group">
                <label for="fnarea" class="control-label col-sm-2">Functional Area:</label>
                 <div class="col-sm-4">  <input type="text" class="form-control" id="fnarea" required name="fnarea"> </div>
               
            </div>
            <h3> Desired Candidate Profile:</h3>
            <div class="page-header" />
                <div class="form-group">
                    <label for="course" class="control-label col-sm-2">Specify Qualification:</label>
                    <div class="col-sm-4 "><select name="course" id="course"  name="ugcourse" class=" form-control" required>
               <option value="" label="Select">Select</option>
               <option value="B.Sc">B.Sc</option>
               <option value="B.Tech/B.E.">B.Tech/B.E.</option>
               <option value="Other">Other</option>
               </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="profile" class="control-label col-sm-2">Desired Candidate Profile:</label>
                    <div class="col-sm-5"><textarea id="profile" rows="5" name="profile" class="form-control" required></textarea></div>
                </div>
                <div class="page-header" />
                <p> Are you sure to submit the job?</p>
                <div class="form-group col-sm-2">
                     <button class="btn btn-lg btn-primary btn-block" type="submit" id="postbtn">Post Job</button>
        </form>
           </div>
    </body>
 <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
 <link href="../css/main.css" rel="stylesheet">
 <link href="../css/employer.css" rel="stylesheet">
 <script type="text/javascript" src="../js/validate.js"></script>
 <script src="../js/jquery-1.12.0.min.js"></script>
 <script src="../js/bootstrap.min.js"></script>
</html>
