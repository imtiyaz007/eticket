<?php
include("conn.php");
session_start();
 $source=$_SESSION['source'];
  $destination=  $_SESSION['destination'];
   $date= $_SESSION['date'];
   $day= $_SESSION['day'];
   date_default_timezone_set('Asia/Calcutta');
$tno=$_REQUEST['tnno'];
$_SESSION['tno']=$tno;
$todaydate=date("m/d/y");

$time= date('H:i:s');
$query=mysql_query("select * from location_ifo where train_no='$tno'")or die(mysql_error());
$fetch=mysql_fetch_array($query);
$traintime=$fetch['ttime'];
$query2=mysql_query("select * from train_info where train_no='$tno'");
$fetch2=mysql_fetch_array($query2);
$tname=$fetch2['train_name'];
$_SESSION['train_name']=$tname;
/*echo "from date";
echo strtotime($date);
echo "<br>";
echo "toadydate";
echo strtotime($todaydate);
echo "toadtiime";
echo strtotime($time);
echo "<br>";
echo "train time";
echo strtotime($traintime);
echo "<br>";*/


if (strtotime($traintime)<=strtotime($time) && strtotime($date)<=strtotime($todaydate)) {
	echo "<script>alert('You Can not Book Your Ticket')</script>";
	echo "<script>window.location.href='home.php'</script>";
	unset($source);
	unset($destination);
	unset($date);
	unset($day);
	
	
}
else
{
	

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
  </style>
  <script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").value = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>
 
<div class="container">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Indian Raiway General E-ticket</a>
    </div>
   
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contect Us</a></li> 
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['uname']; ?>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="profile.php">Profile</a></li>
          <li><a href="logout.php">Logout</a></li>
          
        </ul>
      </li>
      </ul>
       
   
  </div>
</nav>

  <h2>Booking Ticket</h2>
  
  <div class="panel panel-default">
    <div class="panel-heading" style=" background-color: #FFEFD5;"><h4><center>Journey Details</center></h4></div>
    <div class="panel-body"><p>Train No: <?php echo $tno ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Jurney Date:<?php echo $date ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; From Station: <?php echo $source ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; To Station:  <?php echo $destination ?></p> </div>
  </div>
  <hr>

  <div class="panel panel-default">
    <div class="panel-heading" style=" background-color: #FFEFD5;" ><h4><center>Passenger Details</center></h4>  </div>
    <div class="panel-body ">
    <form action="payment.php" method="post">
    	 <table class="table">
                  <thead>
                <tr>
                  <th><center>Name</center></th>
                  <th><center>Age</center></th>
                  <th>Gender</th>
                  <th>Number Of Passenger</th>
                  <th>Total Cost</th>
                </tr>
              </thead>
          <tbody>
      <tr>
                      <td><div class="form-group">
                  
                  <input type="text"  pattern="[A-Z a-z]*" title="No Special Charecter " class="form-control" id="name" name="name" required>
                </div></td>
                      <td><div class="form-group">
                  
                  <input type="number" name="age" class="form-control" id="email" required>
                </div></td>
                      <td>
                      <div class="form-group" >
                  
                  <select class="form-control" id="sel1" name="gn">
                  	<option>Select Genter</option>
                  	<option value="Male">MALE</option>
                  	<option value="Female">FEMALE</option>
                  </select>
                </div></td>
                <td>
                  <select class="form-control" id="sel1" name="users" onchange="showUser(this.value)">
                    <option>Number Of Passenger</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                   
                  </select>
                
                </td>
                <td><input type="text" class="form-control" id="txtHint" name="totalfare" disabled></td>
      </tr>
      
    </tbody>
  </table>

  
  <center><input type="submit" value="Make Payment" class="btn btn-primary"></center>
  </form>
    </div>
  </div>
  
</div>

</body>
</html>



<?php
}
?>