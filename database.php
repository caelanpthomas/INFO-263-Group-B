<?php

// Getting database config information
require_once("config/config.php");

/**
 * Returns an invoice from the database with the matching ID, if it exists.
 *
 * @param string $id 		The id of the invoice to fetch.
 *
 * @return JSON invoice	Returns a json object containing the invoice, or False if no match.
 */
function get_invoice_by_id($id, &$error) {
	global $serverName, $username, $password, $dbName, $port;
	// Creating the connection to the MySQL database
	$conn = new mysqli($serverName, $username, $password, $dbName, $port);

	// Check if there is an error with the connection.
	if ($conn->connect_error){
		$error = $conn->connect_error;
		return False;
	}
	
	// Preparing and executing the SQL statement
	$clean_id = sanitize_input($id, $conn);
	$query = "SELECT * FROM invoice 
			
			LEFT JOIN owner ON invoice.customer_id = owner.owner_id 
			LEFT JOIN vehicle ON vehicle.owner_id = owner.owner_id
			LEFT JOIN inspection ON inspection.vehicle_id = vehicle.vehicle_id
			LEFT JOIN branch ON branch.branch_id = inspection.branch_id
	
			WHERE invoice_id='$clean_id'";
	
	// Execute the query
	$result = $conn->query($query);
	
	// Check for errors during execution
	if (!$result) {
		$error = $conn->error;
		return False;
	}
	
	$conn->close();
	// Only 1 row should ever be returned. If this is not the case, there is an error
	if ($result->num_rows !=1) {
		$error .= "No matching IDs";
	}
	
	// Initialize array variable
	$invoice = array();
	while ($row = $result->fetch_assoc()) {
		$invoice[] = $row;
	}
	
	// Changing NULL values to a hyphen '-' for better display on the webpage
	function update_null_to_hyphen(&$item, $key) {
		if ($item == NULL) {
			$item = "-";
		}
	}
	array_walk($invoice[0], 'update_null_to_hyphen');
	
	
	// Return array in JSON format
	return json_encode($invoice);
}

/*
 * Returns a list of invoice IDs that match the search term passed
 *
 * @param string $term			The search term to use.
 *
 * @return JSON invoice_ids		Returns a json object containing the matching invoice ids.
 */
function search_invoice_id($term, &$error) {
	global $serverName, $username, $password, $dbName, $port;
	// Creating the connection to the MySQL database
	$conn = new mysqli($serverName, $username, $password, $dbName, $port);

	// Check if there is an error with the connection.
	if ($conn->connect_error){
		$error = $conn->connect_error;
		return False;
	}
	
	// Preparing and executing the SQL statement
	$clean_id = sanitize_input($term, $conn);
	$query = "SELECT invoice_id FROM invoice WHERE invoice_id LIKE '%$term%'";
	
	// Execute the query
	$result = $conn->query($query);
	
	// Check for errors during execution
	if (!$result) {
		$error = $conn->error;
		return False;
	}
	
	$conn->close();
	
	// Initialize array variable
	$invoice_ids = array();
	while ($row = $result->fetch_assoc()) {
		$invoice_ids[] = $row;
	}
	
	// Return array in JSON format
	return json_encode($invoice_ids);
}



/*
 * Sanitizes an input string.
 *
 * Check to see if magic quotes are being used, if they are strip slashes from the input string.
 * Use the real_escape_string function of the database to escape the input string.
 * prevent XSS by calling htmlentities function on the input string.
 * Return the sanitized string.
 *
 * @param string $input The string to sanitize.
 * @param mysqli $conn A connection to a mysql database.
 *
 * @return a sanitized string.
 */
function sanitize_input($input, $conn)
{
    if (get_magic_quotes_gpc()) {
        $input = stripslashes($input);
    }
    $input = $conn->real_escape_string($input);
    return htmlentities($input);
}


// Checks if GET request is invalid
function handle_get_request() {
	if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
		header("HTTP/1.1 405 Method Not Allowed");
		return;
	}
	
	// Retreiving GET variables
	$method = isset($_GET['method']) ? $_GET['method'] : False;
	$id = isset($_GET['id']) ? $_GET['id'] : False;
	$search_term = isset($_GET['search_term']) ? $_GET['search_term'] : False;
	
	// If method is "retreive_invoice", use the ID passed to retreive the corresponding invoice
	if ($method == "retreive_invoice") {
		if (!$id) {
			header("HTTP/1.1 400 Bad Request");
			return;
		}
		
		$error = "";
		$json = get_invoice_by_id($id, $error);
		if ($error != "") {
			header ("HTTP/1.1 501 Internal Server Error");
			echo $error;
			return;
		}
		
		// If we make it to here, database read successful, return the data with normal header 200 OK
		echo $json;
		
	} else if ($method == "search") {
		// If method is "search", use the search term passed to return a list of matching invoice IDs
		if (!$search_term) {
			header("HTTP/1.1 400 Bad Request");
			return;
		}
		
		$error = "";
		$json = search_invoice_id($search_term, $error);
		if ($error != "") {
			header ("HTTP/1.1 501 Internal Server Error");
			echo $error;
			return;
		}
		
		// If we make it to here, database read successful, return the data with normal header 200 OK
		echo $json;
	} else {
		// We have an invalid method.
		header("HTTP/1.1 400 Bad Request");
		return;
	}
}

handle_get_request();
 ?>
