<?php
include('conn.php');
session_start();
$id=$_POST['cnid'];
 date_default_timezone_set('Asia/Calcutta');
 $todaydate=date("m/d/y");
 //i have to cheack the date 

 //if date is more then current date then only i can cancle the ticket
 $query=mysql_query("select * from payment where tid='$id' and status=0")or die(mysql_error());
 $fecth=mysql_fetch_array($query);
 $date=$fecth['date'];
 if($date>$todaydate)
 {
 $num=mysql_num_rows($query);

 if($num==0)
 {
 	echo "<script>alert('Invalid Transaction Id')</script> ";
 	echo "<script>window.location.href='home.php'</script> ";
 }
 else
 {
$update=mysql_query("update payment set status=1 where tid='$id' ");
echo "<script>alert('Your Ticker Is succesfully Cancel')</script> ";
echo "<script>window.location.href='home.php'</script> ";
 }
}
else
{
	echo "<script>alert('You Cannot Cancle Before Dates Or  Todays Ticket')</script> ";
	echo "<script>window.location.href='home.php'</script> ";
}
?>