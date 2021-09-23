   <!DOCTYPE HTML>
    <html>
    <head>
        <title>Job Seeker Registration</title>
         <script type="text/javascript">
            function checkForm() {
                // Fetching values from all input fields and storing them in variables.
                var email = document.getElementById("email").value;
                alert($email);
                //Check input Fields Should not be blanks.
                var pass1=document.getElementById("passnew").value;
                var pass2=document.getElementById("passconf").value;
                    if (pass1 != pass2) {
                        alert("Password Do not Match!") ;
                        return false;
                    }
                    else
                    {
                        include ('../Myconnect.php');
                        alert('IN ELSE');
                    }
            }
            function onip(){
                var fname = document.getElementById("fname").value;
                var lname = document.getElementById("lname").value;
                if (!/^[a-zA-Z]*$/.test(fname)) {
				alert("Invalid Name characters");
				document.getElementById("fname").value="";
			    }  
                else if (!/^[a-zA-Z]*$/.test(lname)) {
				alert("Invalid Name characters");
				document.getElementById("lname").value="";
			    } 

            }
 </script>
    </head>
    <body>        
        <nav class="navbar" id="insidenav">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../index.php">Job Portal</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Jobseeker Registration</a></li>
               </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
               </ul>
             </div>
         </nav>

<div class="container">
    <div class="container">
        <div class="jumbotron">
            <h1>Register & find Jobs</h1>
            <p>
                Helps passive and active jobseekers find better jobs. Get connected with recruiters.<br/>
                Apply to jobs in just one click.
            </p>
        </div>

    <form id="reguser" METHOD="post" ACTION='process_user.php' class="form-horizontal">
    <h3 class="h3style"> Your Login Details </h3>
    
     <div class="form-group">
        <label class="control-label col-sm-2" for="email" >Enter your Email ID:</label>
        <div class="col-sm-4">
             <input type="email" name="useremail" placeholder="Your E-mail" class="form-control" id="email" 
                        required/>
        </div>
        <label id="emailerror" class="error" ></label>
     </div>  

     <div class="form-group"> 
         <label class="control-label col-sm-2 " for="passnew" > Create new Password:</label>
         <div class="col-sm-4">  <input type="password" id="passnew" placeholder="New Password" name="pass1" class="form-control" 
                      required/>
         </div>
        <label id="passerror" class="error"></label>
    </div>

    <div class="form-group">
            <label class="control-label col-sm-2 for="passconf">Confirm the Password:</label>
               <div class="col-sm-4">        
                <input type="password" id="passconf" placeholder="Confirm Password" name="pass2" class="form-control" required>
                   </div>
                   <label class="error" id="passerror2"></label>
            </div> 


    <div class="page-header"></div>
    <h3 class="h3style">Your Contact Information</h3>
    


   <div class="form-group">
        <label class="control-label col-sm-3" for="name">Mention your Full Name:</label>
                <div class="col-sm-4">
                    <input type="text" id="fname" placeholder="First Name" name="fname" class="form-control" 
                   oninput='onip()' required/> 
                </div>
                <div class="col-sm-4">
                    <input type="text" id="lname" placeholder="Last Name" name="lname" class="form-control" 
                    oninput='onip()' required/> 
                </div>
    </div>

<div class="form-group">
    <label class="control-label col-sm-3" for="location"> Where are you currently located? </label>
                <div class="col-sm-4">
                    <input type="text" id="locn" placeholder="City" name='city' class="form-control" 
                    required/> 
                </div>
</div>
 <div class="form-group">
     <label class="control-label col-sm-3" for="mobno">Enter your Mobile number:</label>
                 <div class="col-sm-3"><input type="number" min='1000000000' max='9999999999' name="mobno" placeholder=" Mobile number" class="form-control" id="mobno" 
                    required/>
                 </div>
      </div>
<div class="page-header"></div>
<h3 class="h3style"> Your Educational Qualifications </h3>

<div class="form-group"> 
    <label class="control-label col-sm-2" for="ugcourse"> Your Highest Education: </label>
     <div class="col-sm-4"> <select name="course" id="ugcourse" class=" form-control" required>
                <option value="" label="Select">Select</option>
                <option value="B.Sc">B.Sc</option>
                <option value="B.Tech/B.E.">B.Tech/B.E.</option>
                <option value="M.Tech/M.E.">M.Tech/M.E.</option>
                <option value="Other">Other</option>
                </select>
        </div>
 </div>

<div class="page-header"> </div>

        <div class="form-group form-inline col-sm-10">

        <button class="btn btn-success" type="submit"  id="reg" value="submit" onclick='checkForm()'>Register</button>
        <label class="col-sm-2"></label>
        <button class="btn btn-danger" type="reset" id="reset"> Reset </button>

</div>

    </form>
        <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
        <link href="../css/main.css" rel="stylesheet">
        <link href="../css/jobseeker.css" rel="stylesheet">
        <script type="text/javascript" src="../js/validate.js"></script>
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>  
    </body>
    </html>
