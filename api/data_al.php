<?php
/**
 * filename: data_al.php
 * description: this will return the AL results.
 */

//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'school_mgt_system');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}

//query to get data from the table
// $queryC = sprintf("SELECT grade,al_year,Accounting,Business_Studies,Economics FROM al_results ORDER BY al_year");
$queryC = sprintf("SELECT grade,al_year,Accounting,Economics,Business_Studies FROM al_results ORDER BY al_year");

//execute query
$resultC = $mysqli->query($queryC);

//loop through the returned data
$data = array();
foreach ($resultC as $row) {
	$data[] = $row;
}

//free memory associated with result
$resultC->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);