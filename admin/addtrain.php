<?php
include('../conn.php');
if(isset($_POST['chk1']))
{
$mon=$_POST['chk1'];
}
else{
	$mon='0';
}
if(isset($_POST['chk2']))
{
$tue=$_POST['chk2'];
}
else{
	$tue='0';
}
if(isset($_POST['chk3']))
{
$wed=$_POST['chk3'];
}
else{
	$wed='0';
}
if(isset($_POST['chk4']))
{
$thu=$_POST['chk4'];
}
else{
	$thu='0';
}
if(isset($_POST['chk5']))
{
$fri=$_POST['chk5'];
}
else{
	$fri='0';
}
if(isset($_POST['chk6']))
{
$sat=$_POST['chk6'];
}
else{
	$sat='0';
}
if(isset($_POST['chk7']))
{
$sun=$_POST['chk7'];
}
else{
	$sun='0';
}
if ($mon=='0' && $tue=='0' &&$wed=='0' &&$thu=='0' &&$fri=='0'&& $sat=='0' &&$sun=='0') {
	echo "<script>alert('Train Can not Be Added Please Select Any Day')</script>";
	echo "<script>window.location.href='form-elements.php'</script>";
}
else
{
$tname=$_POST['tname'];
$tno=$_POST['tnumber'];
$query=mysql_query("insert into train_info values('','$tno','$tname','$mon','$tue','$wed','$thu','$fri','$sat','$sun')")or die(mysql_error());
if ($query) {
	echo "<script>alert('Train Added Successfully')</script>";
	echo "<script>window.location.href='form-elements.php'</script>";
}
else
{
	echo "<script>alert('Opps Soming Going Wrong')</script>";	
}
}

?>