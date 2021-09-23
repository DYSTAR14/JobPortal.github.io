<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title> NEW CLIENT REGISTRATION </title>

 <script type="text/javascript" src="/job_portal/js/validate.js"></script>
         <script>
             function checkForm() {
// Fetching values from all input fields and storing them in variables.
var email = document.getElementById("emailerror").innerHTML;
var pass1 = document.getElementById("pass1error").innerHTML;
var pass2 = document.getElementById("pass2error").innerHTML;
var compname = document.getElementById("comperror").innerHTML;
var addr = document.getElementById("addrerror").innerHTML;
var pincode = document.getElementById("pinerror").innerHTML;
var person = document.getElementById("personerror").innerHTML;
var phone = document.getElementById("pherror").innerHTML;
                 var about=document.getElementById("abouterror").innerHTML;
//alert(email + pass1 + pass2 + compname + addr + pincode + person + phone);
//Check input Fields Should not be blanks.
//validateRadio("comtype","typeerror");
var p1=document.getElementById("pass1").value;
var p2=document.getElementById("pass2").value;
    if (p1 != p2) {
        document.getElementById("pass2error").innerHTML="Password Do not Match" ;
    }
    else
    {
        document.getElementById("pass2error").innerHTML="" ;

    }

if(email == "" && pass1 == "" && pass2 == "" &&  compname == "" && addr == "" && pincode == "" && person == "" && phone == "" && about == "") {

   //document.getElementById("regcomp").submit();
    return true;
    }

else {

    alert("Fill in with correct information");
    return false;
      }

}
          function onip(){
                var fname = document.getElementById("fperson").value;
                var lname = document.getElementById("lperson").value;
                if (!/^[a-zA-Z]*$/.test(fname)) {
				alert("Invalid Name characters");
				document.getElementById("fperson").value="";
			    }  
                else if (!/^[a-zA-Z]*$/.test(lname)) {
				alert("Invalid Name characters");
				document.getElementById("lperson").value="";
			    } 

            }
 </script>
</head>
<body>

<!-- navigation bar starts here -->
<nav class="navbar" id="insidenav">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../index.php">Job Portal</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Employer Registration</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<!-- navigation bar ends here -->

<!-- container div for page contents -->
<div class="container">
    <div class="jumbotron">
       <h1>Register your company</h1>
        <div id="insidejumb">
        <p>
            Register today and post a job in easy steps and start receiving applications the same day.
        </p>
        </div>
    </div>
<form role="form" id="regcomp" onsubmit="checkForm()" class="form-horizontal" method="post" action="process_regemp.php">
<h3 class="h3style"> Your Login details </h3>
<div class="page-header"> </div>
    
<div class="form-group">
    <label for="email" class="control-label col-sm-2">E-mail:</label>
    <div class="col-sm-4">
       <input type="email" required placeholder="Enter your email" class="form-control" name="email" id="email">
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-2" for="pass1">Password:</label>
    <div class="col-sm-4">  
        <input type ="password"  placeholder="Enter your password" name="pass1" id="pass1" class="form-control"
               required/>
    </div>
    <label class="error" id="pass1error"></label>
</div>

<div class="form-group">
    <label for="pass2" class="control-label col-sm-2"> Confirm Password: </label>
    <div class="col-sm-4">
        <input type ="password"  placeholder="Confirm your password" name="pass2" id="pass2" class="form-control" required>
    </div>
    <label class="error" id="pass2error"></label>
</div>

<div class="page-header"></div>
<h3 class="h3style"> Your Company Details</h3>
<div class="page-header"></div>

<div class="form-group">
  <label class="control-label col-sm-2"> Company Name:</label>
    <div class="col-sm-5"> 
      <input type ="text" class="form-control" name="compname" id="compname" placeholder="Enter Company Name"
             required/>
   </div>
</div>


<div class="form-group">
    <label for="addr" class="control-label col-sm-2">Address:</label>
      <div class="col-sm-5"><textarea id="addr" rows="5" name="addr" class="form-control" required></textarea>
    </div>
      <label class="error" id="addrerror"></label>
</div>

<div class="form-group">
      <label for="pincode" class="control-label col-sm-2">Pincode:</label>
       <div class="col-sm-4">
          <input type ="number" min='100000' max='999999' class="form-control" placeholder="Enter the pincode" name="pin_code" id="pincode"
                 required>
       </div>
      <label class="error" id="pinerror"></label>
</div>

<div class="form-group">
        <label class="control-label col-sm-2" for="person">Contact Person:</label>
        <div class="col-sm-4">
          <input type="text"class="form-control" placeholder="Enter Executive's First Name" id="fperson" name="fperson"
                 required oninput='onip()'>
                 <input type="text"class="form-control" placeholder="Enter Executive's Last Name" id="lperson" name="lperson"
                 required oninput='onip()'>
          <label class="error" id="personerror"></label>
        </div>
</div>

<div class="form-group">
        <label class="control-label col-sm-2" for="phone">Contact Number:</label>
        <div class="col-sm-4">
          <input type="number" min='1000000000' max='9999999999' class="form-control" placeholder="Enter Contact Number" id="phone" name="phone"
                 required>
        </div>
</div>

<div class="form-group">
        <label class="control-label col-sm-2"> Where are you currently located? </label>
                  <div class="form-inline"> 
                    <input name="city" class="form-control states" id="city" style="width:145px;" placeholder='City' required/>
                  </div>
</div>
    <div class="form-group">
        <label class="control-label col-sm-2">About Company:</label>
        <div class="col-sm-5">
            <textarea name='cmpinfo' placeholder="Describe your company" class="form-control" rows="5" required></textarea>
        </div>
    </div>
    <div class="page-header"> </div>
   <div class="form-group form-inline col-sm-10">
    <button class="btn btn-success" type="submit"  id="reg">Register</button>
    <label for="reset" class="control-label"> </label>
     <button class="btn btn-danger" type="reset" id="reset"> Reset </button>
</div>
</form>
</div>
<div class="page-header"> </div>
<link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
<link href="../css/main.css" rel="stylesheet">
<link href="../css/employer.css" rel="stylesheet">
<script src="../js/jquery-1.12.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
