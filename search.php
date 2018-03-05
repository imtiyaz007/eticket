<?php
include('conn.php');
$searchTerm = $_GET['term'];
//get matched data from skills table
$query = mysql_query("SELECT DISTINCT source FROM location_ifo WHERE source LIKE '%$searchTerm%'")or die(mysql_error());
while ($row = mysql_fetch_array($query)) {
    $data[] = $row['source'];
}
//return json data
echo json_encode($data);
?>