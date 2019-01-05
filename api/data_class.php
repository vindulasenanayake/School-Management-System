<?php
/**
 * filename: data_class.php
 * description: this will return the marks of students in each class in grade 9.
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
$queryB = sprintf("SELECT subjects,A,B,C,D,E,F,term FROM classes_9 ORDER BY term");

//execute query
$result = $mysqli->query($queryB);

//loop through the returned data
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);