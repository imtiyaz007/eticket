<?php
session_start();
$source=$_SESSION['source'];
  $destination=  $_SESSION['destination'];
   $date= $_SESSION['date'];
$name=$_SESSION['name'];
 $age=  $_SESSION['age'];
  $gn= $_SESSION['gn'];
  $pnr=$_SESSION['$pnr'];
  $tname=$_SESSION['train_name'];

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
  <script lang='javascript'>
 $(document).ready(function(){
  $('#printPage').click(function(){
       $("#printPage").hide();
       
        var data = window.print();           
        data += '<div id="div_print">';
        data += $('#your_content').html();
        data += '</div>';

        myWindow=window.open('','','width=200,height=100');
        myWindow.innerWidth = screen.width;
        myWindow.innerHeight = screen.height;
        myWindow.screenX = 0;
        myWindow.screenY = 0;
        myWindow.document.write(data);
        
        myWindow.focus();


    });


 });
 </script>
 <style type="text/css">
   @import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);
body { 
  
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  font-family: 'Exo', sans-serif;
}
p{

  font-size: 30px;
}


 </style>
</head>
<body>
 
<div class="container">
  <h2>Jurney Details</h2>
  <div class="panel panel-default">
    <div class="panel-heading"><p>Ticket Information</p></div>
    <div class="panel-body">
    <p>Source Station:<?php echo($source); ?></p>
    <p>Destination Station:<?php echo($destination); ?></p>
    <p>Train Name:<?php echo($tname); ?></p>
    <p>Total Number Of Passenger:<?php echo $_SESSION['psgn']; ?></p>
    <p>Total Fare:<?php  echo $_SESSION['total']; ?></p>
    <p>Kilometer:<?php  echo $_SESSION['km']; ?></p>
    <p>Transaction Id:<?php echo($pnr); ?></p>
    <h2><a href="javascript:void(0);" id="printPage">Print</a></h2>
    </div>
  </div>
  
</div>

</body>
<h2 id="home"><a href="home.php">HOME</a></h2>
</html>

