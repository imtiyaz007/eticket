<?php
include('conn.php');
session_start();
$tno=$_SESSION['tno'];
$q = intval($_GET['q']);
$query=mysql_query("select * from location_ifo where train_no='$tno'")or die(mysql_error());
$fetch=mysql_fetch_array($query);
$fare=$fetch['fare'];
$total=$fare * $q ;
$_SESSION['totalfare']=$total;
echo $total;


?>