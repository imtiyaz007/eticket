<?php
include('conn.php');
session_start();
 function generateRandomString($length = 10) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$pnr= generateRandomString();
echo $pnr;

 $source=$_SESSION['source'];
  $destination=  $_SESSION['destination'];
   $date= $_SESSION['date'];
$name=$_SESSION['name'];
 $age=  $_SESSION['age'];
  $gn= $_SESSION['gn'];
  $_SESSION['$pnr']=$pnr;

  $total=$_SESSION['total'];
  $paseenger= $_SESSION['psgn'];
   
   
   $query=mysql_query("insert  into payment values('', '$source','$destination','$date','$name','$age','$gn','$paseenger','$total','$pnr',0)")or die(mysql_error());
  echo "<script>window.location.href='ticket2.php'</script>";
?>