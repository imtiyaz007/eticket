<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
      @import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);
    body { 
  background: url("img/divback.jpg") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  font-family: 'Exo', sans-serif;
}
  </style>
</head>
<body>
 
<div class="container">
  <h2><?php echo $_SESSION['uname']; ?>'s Profile</h2>
  <div class="panel panel-default col-md-7 col-xs-offset-2" style="opacity: .6;">
    <div class="panel-body">hasjhj</div>
  </div>
</div>

</body>
</html>