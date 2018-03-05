<?php
include('conn.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Indian Railway</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- js validation library -->

<script src="validation.js"></script>
<!-- Latest compiled JavaScript -->


 
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <script type="text/javascript">
 	$(document).ready(function(){
    
    $("#myBtn3").click(function(){
        $("#myModal3").modal({backdrop: "static"});
    });
});
 </script>
 <script type="text/javascript"></script>
	<style type="text/css">
	@import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);
		body { 
  background: url("img/back.jpg") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  font-family: 'Exo', sans-serif;
}

.panel-default {
opacity: 0.9;
margin-top:30px;
}
.form-group.last { margin-bottom:0px; }
	</style>
</head>
<body>
<div class="container">
<div class="row">
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Indian Raiway General E-ticket</a>
    </div>
   
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contect Us</a></li> 
      </ul>
       
   
  </div>
</nav>
</div>
    <div class="row">
        <div class="col-md-4 col-md-offset-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-lock"></span> Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" action="" method="post">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">
                            Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">
                            Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="inputPassword3" name="pass" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"/>
                                    Remember me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" name="loginsubmit" class="btn btn-success btn-sm">
                                Sign in</button>
                                 <button type="reset" class="btn btn-default btn-sm">
                                Reset</button>
                        </div>
                    </div>
                    <center><span id="msg" style="color: red"></span></center>
                    </form>
                </div>
                <div class="panel-footer">
                    Not Registred? <a  id="myBtn3" style="cursor: pointer; ">Register here</a></div>
            </div>
        </div>
    </div>
     <!-- Modal -->
 
</div>
<div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">X</button>
          <h4 class="modal-title">Register</h4>
        </div>
        <div class="modal-body">
                     <form class="form-horizontal"  action="" method="post" role="form" onsubmit="return valid_form()">
                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">
                            Name</label>
                        <div class="col-sm-9">
                            <input type="text" id="name" name="name" class="form-control" id="inputEmail3" placeholder="Name" pattern="[A-Z a-z]*" title="No Special Charecter " required>
                        </div>
                       <center><span id="uname" ></span></center>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">
                            Email</label>
                        <div class="col-sm-9">
                            <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">
                            Password</label>
                        <div class="col-sm-9">
                            <input type="password" name="pass1" class="form-control" id="pass1" placeholder="Password" onblur="valid_pass1()" required>
                            <span id="passerr"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">
                           Confirm Password</label>
                        <div class="col-sm-9">
                            <input type="password"  name="pass2" id="pass2" class="form-control"  placeholder="Password"  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">
                           Date Of Birth</label>
                        <div class="col-sm-9">
                            <input type="date" name="dob" class="form-control" id="inputPassword3" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">
                          Address</label>
                        <div class="col-sm-9">
                            <input type="text" name="add" class="form-control" id="inputPassword3" placeholder="Password" required>
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">
                          Mobile No</label>
                        <div class="col-sm-9">
                            <input type="number" name="mno" class="form-control" id="mnum" name="mnum" placeholder="Password" onblur="valid_mobile()" required>
                        </div>
                        <span id="phoneerr" class="col-md-offset-4"></span>
                    </div>
                   
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" name="submit" class="btn btn-success btn-sm">
                                Sign up</button>
                                
                        </div>
                    </div>
                    </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

</body>
</html>
<?php
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $pass=$_POST['pass2'];
  $dob=$_POST['dob'];
  $add=$_POST['add'];
  $mno=$_POST['mno'];
  $echech=mysql_query("select email from users where email='$email'");
  $rows=mysql_num_rows($echech);
  if ($rows==0)   {
    $inset=mysql_query("insert into users values('','$name','$pass','$dob','$add','$mno','$email','')")or die(mysql_error());
    $_SESSION['email']=$email;
    $_SESSION['uname']=$name;
    
    echo "<script>alert('Account Create Successfully')</script>";
    echo "<script>window.location.href='home.php'</script>";
    
  }
  else
  {
    echo "<script>alert('Email Id Already Exists')</script>";
    echo "<script>window.location.href='index.php'</script>";
  }
}

if(isset($_POST['loginsubmit']))
{
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  $insert=mysql_query("select * from users where email='$email' and pass='$pass'");
  $row=mysql_num_rows($insert);
  if ($row==1) {
    $fetch=mysql_fetch_array($insert);
    $uname=$fetch['name'];
    $email=$fetch['email'];
     $_SESSION['email']=$email;
    $_SESSION['uname']=$uname;
    if($_SESSION['email']=='admin@admin.com')
    {
      echo "<script>window.location.href='admin/index.php'</script>";
    }
    else
    {
      echo "<script>window.location.href='home.php'</script>";
    }
    
  }
  else
  {
    echo "<script>document.getElementById('msg').innerHTML='Invalid Email ID Or Password';</script>";
  }
}
?>