<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="company.css">
  <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/applicationpage.css">
<link href="../css/main.css" rel="stylesheet">
<link href="../css/employer.css" rel="stylesheet">
<script src="../js/jquery-1.12.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</head>
<body>
              
  
<div class="container-fluid text-center">
<?php
  session_start();
    include('../Myconnect.php');
    $eid=$_GET['eid'];
    $aid=$_GET['aid'];
    $query="select * from ads where aid='$aid'";
    $result=mysqli_query($conn,$query);
    $resultset=mysqli_fetch_array($result);
    $cmpname="select companyname from employer where eid='$eid'";
    $result2=mysqli_query($conn,$cmpname);
    $result2a=mysqli_fetch_array($result2);
    echo"<div class='col-sm-12 text-left'>"; 
    echo"<div class='box'>";
    echo"<img src='../uploads/logo/".$result2a['companyname'].".jpg' class='image'>";
    echo"<p><br><br>JOB TITLE:".$resultset['title']."</p>";
    echo"<p><u><br><br>JOB DESCRIPTION:".$resultset['jobdesc']."</u></p>";
    echo"<p><u><br><br>Salary:".$resultset['salary']."</u></p>";
    echo"<p><u><br><br>Location:".$resultset['location']."</u></p>";
    echo"<p><u><br><br>Vacancies:".$resultset['vacno']."</u></p>";
    echo"<p><u><br><br>Required Qualification:".$resultset['course']."</u></p>";
    echo"<p><u><br><br>Job Profile:".$resultset['jprofile']."</u></p>";
    echo"<p><span class='glyphicon glyphicon-map-marker'></span>".$resultset ['location']."</p>";
     echo"<a href='apply_job.php?aid=".$aid."&eid=".$eid."'>APPLY FOR THIS JOB!</a>";
     echo"</div>"; 
     echo" </a>";
     ?>
   
  </div>
</div>

<footer class="container-fluid text-center">
        <a href="#insidenav" title="To Top">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        <p>Job Portal</p>
    </footer>

</body>
</html>
