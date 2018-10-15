<?php

// Getting database config information
require_once("/config/config.php");

/**
 * Returns an invoice from the database with the matching ID, if it exists.
 *
 * @param string $id 		The id of the invoice to fetch.
 *
 * @return JSON invoices	Returns a json object containing the invoice, or False if no match.
 */
function get_target_values(&$error) {
	
	// Creating the connection to the MySQL database
	$conn = new mysqli($serverName, $username, $password, $dbName, $port);

	// Check if there is an error with the connection.
	if ($conn->connect_error){
		$error = $conn->connect_error;
		return False;
	}
	
	// Preparing and executing the SQL statement
	$query = "SELECT * FROM targetvalue";
	
	// Execute the query
	$result = $conn->query($query);
	
	// Check for errors during execution
	if (!$result) {
		$error = $conn->error;
		return False;
	}
	
	$conn->close();
	// If there is not one row returned, then there has been an error. Add to the error string
	if ($result->num_rows !=1) {
		$error .= "No matching IDs";
	}
	
	// Initialize array variable
	$return_array = array();
	while ($row = $result->fetch_assoc()) {
		$return_array[] = $row;
	}
	
	// Changing NULL values to a hyphen '-' for better display on the webpage
	function update_null_to_hyphen(&$item, $key) {
		if ($item == NULL) {
			$item = "-";
		}
	}
	array_walk($return_array[0], 'update_null_to_hyphen');
	
	// Return array in JSON format
	return json_encode($return_array);
}

	
// Handler for an incoming request (is called by default)
// Checks if the request is valid, and returns the information
function handle_get_request() {
	if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
		header("HTTP/1.1 405 Method Not Allowed");
		return;
}
	$error = "";
	$json = get_target_values($error);
	if ($error != "") {
		header ("HTTP/1.1 501 Internal Server Error");
		echo $error;
		return;
	}
	// Successful database read, return the data with normal header 200 OK
	echo $json;
}

handle_get_request();
 ?>