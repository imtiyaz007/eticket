<?php
include('conn.php');
$searchTerm = $_GET['term'];
//get matched data from skills table
$query = mysql_query("SELECT DISTINCT destination from location_ifo WHERE destination LIKE '%$searchTerm%'")or die(mysql_error());
while ($row = mysql_fetch_array($query)) {
    $data[] = $row['destination'];
}
//return json data
echo json_encode($data);
?>