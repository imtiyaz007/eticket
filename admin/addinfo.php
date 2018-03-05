<?php
include('../conn.php');
$sname=$_POST['sname'];
$dname=$_POST['dname'];
$tno=$_POST['tno'];
$time=$_POST['time'];
$fare=$_POST['fare'];
$query=mysql_query("insert into location_ifo values(' ','$sname','$dname','$tno','$fare','$time')")or die(mysql_error());
if ($query) {
	echo "<script>alert('Route Added Successfully')</script>";
	echo "<script>window.location.href='addstation.php'</script>";
}
else
{
	echo "<script>alert('Opps Soming Going Wrong')</script>";	
}
?>