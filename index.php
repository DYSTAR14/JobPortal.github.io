<!DOCTYPE HTML>
<html>
<head>
        <title> Job Portal </title>
       
    </head>
        
<nav class="navbar" id="insidenav">
  <div class="container-fluid">
      <div class="navbar-header">
          <a class="navbar-brand" href="#">Job Portal</a>
      </div>

    <ul class="nav navbar-nav">
      <li class="active"><a data-toggle="tab" href="#">Home</a></li>
        <li><a data-toggle="tab" href="#recent"">Recent Jobs</a></li>
      <li><a data-toggle="tab" href="#jobseeker">Job Seeker</a></li>
      <li><a data-toggle="tab" href="#">Contact Us</a></li>
      <li><a data-toggle="tab" href="#contact">About Us</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="glyphicon glyphicon-user"></span> Register <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="jobseeker/register_user.php">Jobseeker</a></li>
                        <li><a href="employer/register_emp.php">Employer</a></li>
                    </ul>
                </li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
    <!--- -------------------------------------------------------------------------------------------------- -->
    <body id="indexbody" data-spy="scroll" data-target=".navbar" data-offset="60">
<div class="bmsTop">
    <ul>
        <li style="font-size: 15px; font-weight: bold">Top Recruiters:</li>
        <li><a href="#" target="_blank">
                <img src="images/c1_logo.jpeg" border="0">
            </a></li>
        <li><a href="#" target="_blank">
                <img src="images/c2_logo.jpeg" border="0">
            </a></li>
        <li><a href="#" target="_blank">
                <img src="images/c3_logo.jpeg" border="0"></a>
        </li>
        <li><a href="#" target="_blank">
                <img src="images/c4_logo.jpeg" border="0"></a></li>
        <li><a href="#" target="_blank">
                <img src="images/c5_logo.jpeg" border="0"></a>
        </li>
    </ul>
</div>

<div class="container-fluid" id="main1"> <!-- jumbotron fluid -->
<div class="jumbotron text-center" id="searchjum">
<h1>Job Portal</h1>
    <p>Search for Jobs</p>
    <form class="form-inline" id="homesearch">
        <input type="text" class="form-control" size="50" placeholder="Enter your search keyword" name="keyword" id="keyword">
        <button type="button" onclick="" class="btn btn-lg " style="color: black"><span class="glyphicon glyphicon-search"></span> Search</button>
    </form>
</div>
</div> <!-- jumbotron -->

<div class="container" id="subcontent" style="background: transparent">
    <!-- div for search contents -->
</div>
<div class="page-header" style="background:#1abc9c"></div>
<div class="container-fluid" style="background: transparent">
    <div class="text-center">
        <h2>Register</h2>
        <h4>Register in this website for a better experience</h4>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Employers</h1>
                </div>
                <div class="panel-body">
                    <p style="font-size: 16px">Register today and post a job in easy steps and start receiving applications the same day.
                        Find the right candidates easily and quickly through our Search feature.</p>
                </div>
                <div class="panel-footer">
                   <a href="employer/register_emp.php" style="color: inherit"> <button class="btn btn-lg">Sign Up</button></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Job Seekers</h1>
                </div>
                <div class="panel-body">
                    <p style="font-size: 16px">Helps passive and active jobseekers find better jobs. Get connected with over 45000 recruiters.
                        Apply to jobs in just one click. Apply to thousands of jobs posted daily.</p>
                </div>
                <div class="panel-footer">
                    <a href="jobseeker/register_user.php" style="color: inherit"><button class="btn btn-lg">Sign Up</button></a>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="container" id="contact">
        <div class="page-header" style="background: gray"></div>
        <h2 class="text-center">CONTACT US</h2>
        <br/>
        <div class="row">
            <div class="col-sm-5">
                <p>Contact us and we'll get back to you within 24 hours.</p>
                <p><span class="glyphicon glyphicon-map-marker"></span> Maharashtra, India</p>
                <p><span class="glyphicon glyphicon-phone"></span> +919594162665</p>
                <p><span class="glyphicon glyphicon-envelope"></span> jashvora100@gmail.com</p>
            </div>

            <div class="col-sm-7">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-default pull-right" type="submit">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Contact -->

</div> <!-- sub content -->
 <div class="page-header" style="background: #f4511e"></div>
<!-- Container -->
<!-- Set height and width with CSS -->
<div id="googleMap" style="height:400px;width:100%;"></div>

<!-- Add Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
    var myCenter = new google.maps.LatLng(19.2679, 72.9670);

    function initialize() {
        var mapProp = {
            center:myCenter,
            zoom:12,
            scrollwheel:false,
            draggable:false,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

        var marker = new google.maps.Marker({
            position:myCenter,
        });

        marker.setMap(map);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<footer class="container-fluid text-center">
    <a href="#insidenav" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>Job Portal</p>
</footer>
</body>
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/search.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/home.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
</html>
