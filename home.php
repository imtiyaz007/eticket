<?php
include('conn.php');
session_start();
if(isset($_SESSION['uname']))
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/ionicons.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="datepic.css">
   <script src="jquery-1.10.2.js"></script>
  <script src="jquery-ui.js"></script>
  
  <script>
  $(function() {
    $( "#dob" ).datepicker({
      minDate: new Date(),

  changeMonth:false,
      changeYear: false,
    numberOfMonths: 2,
    dateFormate:'dd-mm-yy',
    });
     $("#dob").datepicker('setDate', new Date());
  });
</script>
 
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

.panel.with-nav-tabs .panel-heading{
    padding: 5px 5px 0 5px;
}
.panel.with-nav-tabs .nav-tabs{
	border-bottom: none;
}
.panel.with-nav-tabs .nav-justified{
	margin-bottom: -1px;
}
/********************************************************************/
/*** PANEL DEFAULT ***/
.with-nav-tabs.panel-default .nav-tabs > li > a,
.with-nav-tabs.panel-default .nav-tabs > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li > a:focus {
    color: #777;
}
.with-nav-tabs.panel-default .nav-tabs > .open > a,
.with-nav-tabs.panel-default .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-default .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-default .nav-tabs > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li > a:focus {
    color: #777;
	background-color: #ddd;
	border-color: transparent;
}
.with-nav-tabs.panel-default .nav-tabs > li.active > a,
.with-nav-tabs.panel-default .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.active > a:focus {
	color: #555;
	background-color: #fff;
	border-color: #ddd;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #f5f5f5;
    border-color: #ddd;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #777;   
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #ddd;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #555;
}
/********************************************************************/
/*** PANEL PRIMARY ***/
.with-nav-tabs.panel-primary .nav-tabs > li > a,
.with-nav-tabs.panel-primary .nav-tabs > li > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li > a:focus {
    color: #fff;
}
.with-nav-tabs.panel-primary .nav-tabs > .open > a,
.with-nav-tabs.panel-primary .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-primary .nav-tabs > li > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li > a:focus {
	color: #fff;
	background-color: #3071a9;
	border-color: transparent;
}
.with-nav-tabs.panel-primary .nav-tabs > li.active > a,
.with-nav-tabs.panel-primary .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li.active > a:focus {
	color: #428bca;
	background-color: #fff;
	border-color: #428bca;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #428bca;
    border-color: #3071a9;
}
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #fff;   
}
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #3071a9;
}
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    background-color: #4a9fe9;
}
/********************************************************************/
/*** PANEL SUCCESS ***/
.with-nav-tabs.panel-success .nav-tabs > li > a,
.with-nav-tabs.panel-success .nav-tabs > li > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li > a:focus {
	color: #3c763d;
}
.with-nav-tabs.panel-success .nav-tabs > .open > a,
.with-nav-tabs.panel-success .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-success .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-success .nav-tabs > li > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li > a:focus {
	color: #3c763d;
	background-color: #d6e9c6;
	border-color: transparent;
}
.with-nav-tabs.panel-success .nav-tabs > li.active > a,
.with-nav-tabs.panel-success .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li.active > a:focus {
	color: #3c763d;
	background-color: #fff;
	border-color: #d6e9c6;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #dff0d8;
    border-color: #d6e9c6;
}
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #3c763d;   
}
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #d6e9c6;
}
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #3c763d;
}
/********************************************************************/
/*** PANEL INFO ***/
.with-nav-tabs.panel-info .nav-tabs > li > a,
.with-nav-tabs.panel-info .nav-tabs > li > a:hover,
.with-nav-tabs.panel-info .nav-tabs > li > a:focus {
	color: #31708f;
}
.with-nav-tabs.panel-info .nav-tabs > .open > a,
.with-nav-tabs.panel-info .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-info .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-info .nav-tabs > li > a:hover,
.with-nav-tabs.panel-info .nav-tabs > li > a:focus {
	color: #31708f;
	background-color: #bce8f1;
	border-color: transparent;
}
.with-nav-tabs.panel-info .nav-tabs > li.active > a,
.with-nav-tabs.panel-info .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-info .nav-tabs > li.active > a:focus {
	color: #31708f;
	background-color: #fff;
	border-color: #bce8f1;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #d9edf7;
    border-color: #bce8f1;
}
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #31708f;   
}
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #bce8f1;
}
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #31708f;
}
/********************************************************************/
/*** PANEL WARNING ***/
.with-nav-tabs.panel-warning .nav-tabs > li > a,
.with-nav-tabs.panel-warning .nav-tabs > li > a:hover,
.with-nav-tabs.panel-warning .nav-tabs > li > a:focus {
	color: #8a6d3b;
}
.with-nav-tabs.panel-warning .nav-tabs > .open > a,
.with-nav-tabs.panel-warning .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-warning .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-warning .nav-tabs > li > a:hover,
.with-nav-tabs.panel-warning .nav-tabs > li > a:focus {
	color: #8a6d3b;
	background-color: #faebcc;
	border-color: transparent;
}
.with-nav-tabs.panel-warning .nav-tabs > li.active > a,
.with-nav-tabs.panel-warning .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-warning .nav-tabs > li.active > a:focus {
	color: #8a6d3b;
	background-color: #fff;
	border-color: #faebcc;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #fcf8e3;
    border-color: #faebcc;
}
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #8a6d3b; 
}
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #faebcc;
}
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #8a6d3b;
}
/********************************************************************/
/*** PANEL DANGER ***/
.with-nav-tabs.panel-danger .nav-tabs > li > a,
.with-nav-tabs.panel-danger .nav-tabs > li > a:hover,
.with-nav-tabs.panel-danger .nav-tabs > li > a:focus {
	color: #a94442;
}
.with-nav-tabs.panel-danger .nav-tabs > .open > a,
.with-nav-tabs.panel-danger .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-danger .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-danger .nav-tabs > li > a:hover,
.with-nav-tabs.panel-danger .nav-tabs > li > a:focus {
	color: #a94442;
	background-color: #ebccd1;
	border-color: transparent;
}
.with-nav-tabs.panel-danger .nav-tabs > li.active > a,
.with-nav-tabs.panel-danger .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-danger .nav-tabs > li.active > a:focus {
	color: #a94442;
	background-color: #fff;
	border-color: #ebccd1;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #f2dede; /* bg color */
    border-color: #ebccd1; /* border color */
}
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #a94442; /* normal text color */  
}
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #ebccd1; /* hover bg color */
}
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff; /* active text color */
    background-color: #a94442; /* active bg color */
}
</style>
<body>
<div class="container">
<span style="display: none;">code is created by imtiyaz</span>
<div class="row">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Indian Raiway General E-ticket</a>
    </div>
   
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="About.php">About</a></li>
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
<div class="col-md-4">
            <div class="panel with-nav-tabs panel-primary">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1primary" data-toggle="tab"><i class="fa fa-subway" style="font-size:24px"></i>Search Train</a></li>
                            <li><a href="#tab2primary" data-toggle="tab">Cancel Ticket</a></li>
                            
                           <!-- <li class="dropdown">
                                <a href="#" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#tab4primary" data-toggle="tab">Primary 4</a></li>
                                    <li><a href="#tab5primary" data-toggle="tab">Primary 5</a></li>
                                </ul>
                            </li>-->
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1primary">
                        <form action="" method="post">
    				<div class="form-group">
      					<label for="usr">SourceName</label>
      						<input type="text" class="form-control" id="sur" class="sur" name="sur" required>
   					 </div>
    				<div class="form-group">
      					<label for="pwd">Destnation</label>
      					<input type="text" class="form-control" name="des" id="des" required >
   					 </div>
   					 <div class="form-group">
      					<label for="pwd">Date Of Jurnery</label>
      					<input type="text" class="form-control" name="dob" id="dob">
   					 </div>
             <button type="submit" name="search" class="btn btn-success col-md-4 col-md-offset-4">Search</button>
  					</form></div>
                        <div class="tab-pane fade" id="tab2primary">
                          <form action="cancle.php" method="post">
                            <label>Enter Transaction Id</label>
                            <input type="number" name="cnid" class="form-control"  required>
                            <input type="submit" value="Cancle" name="" class="btn btn-success col-md-4 col-md-offset-3" style=" margin-top:20px;" >
                          </form>

                        </div>
                        <div class="tab-pane fade" id="tab3primary">Primary 3</div>
                        <div class="tab-pane fade" id="tab4primary">Primary 4</div>
                        <div class="tab-pane fade" id="tab5primary">Primary 5</div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        //getting value from Search Key
        if (isset($_POST['search'])) {
          
        $source=$_POST['sur'];
        $destination=$_POST['des'];
        $date=$_POST['dob'];
        $timestamp = strtotime($date);
        $dw = date( "D", $timestamp);
        $searchquery=mysql_query("select * from location_ifo where source='$source' and destination='$destination' ")or die(mysql_error());
       

        $row=mysql_num_rows($searchquery);
       
          
        ?>
	<!--Search Pannal-->
  <div class="panel panel-default col-md-8">
  <div class="panel-heading"><h4><?php echo "$source"; ?> to <?php echo "$destination"; ?> </h4></div>
  <div class="panel-body">
  <?php
  //cheaking Weather there is any train or not in sourch and destination
   if ($row>0) {
    $_SESSION['source']=$source;
    $_SESSION['destination']=$destination;
    $_SESSION['date']=$date;
    $_SESSION['day']=$dw;
  ?>
  
    <table class="table">
    <thead>
    
      <tr>
        <th>Train Name</th>
        
        <th>Train No</th>
        <th>Train Running Days</th>
        <th>Time</th>
        <th>Fare</th>
        <th>Book</th>
      </tr>
    </thead>
    <tbody>
    <?php
    //geting train from source to destination
    $active=0;
    while ($fecth=mysql_fetch_array($searchquery)) {
      # code...
      /* $searchquery2=mysql_query("SELECT location_ifo.source,location_ifo.destination,train_info.train_name, train_info.mon,train_info.tue,train_info.wed,train_info.thu,train_info.fri,train_info.sat,train_info.sun from location_ifo INNER JOIN train_info ON location_ifo.train_no=train_info.train_no WHERE train_info.train_no='22134'");*/
      //take train no and join two table and find the train details
      $tno=$fecth['train_no'];
       $searchquery2=mysql_query(" select location_ifo.source,location_ifo.destination,location_ifo.fare,location_ifo.train_no,location_ifo.ttime,train_info.train_name, train_info.mon,train_info.tue,train_info.wed,train_info.thu,train_info.fri,train_info.sat,train_info.sun from location_ifo INNER JOIN train_info ON location_ifo.train_no=train_info.train_no WHERE train_info.train_no='$tno'");
       //cheaking weathe there is any train in given day or not
       $fecth2=mysql_fetch_array($searchquery2);
       if ($fecth2['mon']==$dw || $fecth2['tue']==$dw || $fecth2['wed']==$dw || $fecth2['thu']==$dw || $fecth2['fri']==$dw || $fecth2['sat']==$dw || $fecth2['sun']==$dw ) {
        $active=1;
       
       
    
    ?>
      <tr>
        <td><?php echo $fecth2['train_name']; ?></td>
        
        <td><?php echo $fecth2['train_no']; ?></td>
        <td><?php if($fecth2['mon']!='0'){echo $fecth2['mon'];}if($fecth2['tue']!='0'){echo $fecth2['tue'];}if($fecth2['wed']!='0'){echo $fecth2['wed'];}if($fecth2['thu']!='0'){echo $fecth2['thu'];}if($fecth2['fri']!='0'){echo $fecth2['fri'];}if($fecth2['sat']!='0'){echo $fecth2['sat'];}if($fecth2['sun']!='0'){echo $fecth2['sun'];} ?></td>
         <td><?php echo $fecth2['ttime']; ?></td>
        <td><?php echo $fecth2['fare']; ?></td>
        <td><a href="BookTicket.php?tnno=<?php echo $tno; ?>"><button type="button" class="btn btn-success">Book</button></a></td>
      </tr>
     <?php
   }
   
 }
 
    if ($active<1) {
      # code...
       echo "<script>alert('There No Such Train In This Day Try With Anothoer Date ')</script>";

    }
    
   

  
     ?>
   
    </tbody>
  </table>
  
  </div>
</div>
<?php

}
 else
   {
    echo "<h1>Sorry No Such Train Is There</h1>";
}
}

?>

  </div>
</div>

  

<!--Search Script and LInk-->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#sur" ).autocomplete({
      source: "search.php"
    });
  });
  </script>
   <script>
  $(function() {
    $( "#des" ).autocomplete({
      source: "search2.php"
    });
  });
  </script>
</body>

</html>
<?php
}
else
{
  echo "<script>window.location.href='index.php'</script>";
}
?>