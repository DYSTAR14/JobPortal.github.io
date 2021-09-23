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
</head>
<body>

              
  
<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-3 sidenav">
<h4>Filter Companies by</h4>
<h3>OVERALL COMPANY RATING</h3>   
<div class="first">
	<input type="radio" name="r1"style="float:left">
      <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span><br>
</div>
<div class="second">

	<input type="radio" name="r1" style="float:left">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span><br>
</div>
<div class="third">

	<input type="radio" name="r1" style="float:left">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span><br>
</div>
<div class="fourth">

	<input type="radio" name="r1" style="float:left">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span><br>
</div>
<div class="fifth">

	<input type="radio" name="r1" style="float:left">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<span class="fa fa-star checked"></span><br>

<div class="check">
    <div>
        <h3>Industry Names</h3>
        <label class="container">IT/ITES
          <input type="checkbox" checked="checked">
          <span class="checkmark"></span>
        </label>
    </div>
    <div>
        <label class="container">Computer Software
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
    </div>
    <div>
        <label class="container">Consulting
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
        </div>
        <div>
        <label class="container">IT Services
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
        </div>
        </div>       
</div>
</div>
  <?php
  session_start();
    include('Myconnect.php');
    $query='select * from ads where status=1';
    $result=mysqli_query($conn,$query);
    while($resultset=mysqli_fetch_array($result)){
      $eid=$resultset['eid'];
      $aid=$resultset['aid'];
      $cmpname="select companyname from employer where eid='$eid'";
      $result2=mysqli_query($conn,$cmpname);
      $result2a=mysqli_fetch_array($result2);
      //$cmpname=$result2a['companyname'];
    echo" <a href='/Job/jobseeker/applicationpage.php?aid=".$aid."&eid=".$eid."'>";
    echo "<div class='col-sm-9 text-left'>"; 
    echo "<div class='box'>";
     echo"<img src='uploads/logo/".$result2a['companyname'].".jpg' class='image'>";
      echo"<p><u><br><br>".$resultset['title']."</u></p>";
       echo"<p><span class='glyphicon glyphicon-map-marker'></span>".$resultset ['location']."</p>";
     echo"<p>IT/ITES</p>";
     echo"</div>";
      } 
     echo" </a>";
     ?>
    </div>
   
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
