<?php
$conn=mysql_connect("localhost","root","");
$dbselect=mysql_select_db("eticket",$conn)or die(mysql_error());
?>