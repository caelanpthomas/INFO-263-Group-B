<?php

/**
 * Returns an invoice from the database with the matching ID, if it exists.
 *
 * @param string $id 		The id of the invoice to fetch.
 *
 * @return JSON invoices	Returns a json object containing the invoice, or False if no match.
 */
function get_invoice_by_id($id, &$error) {
	
	// IMPORTANT
	// FOR TESTING PURPOSES ONLY.
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "assignmentdb";
	//
	
	// Creating the connection to the MySQL database
	$conn = new mysqli($hostname, $username, $password, $database);

	// Check if there is an error with the connection.
	if ($conn->connect_error){
		$error = $conn->connect_error;
		return False;
	}
	
	// Preparing and executing the SQL statement
	$clean_id = sanitize_input($id, $conn);
	$query = "SELECT * FROM invoice WHERE invoice_id='$clean_id'";
	
	// Execute the query
	$result = $conn->query($query);
	
	// Check for errors during execution
	if (!$result) {
		$error = $conn->error;
		return False;
	}
	
	$conn->close();
	/*if the number of rows returned is not one
	adds on error string*/
	if ($result->num_rows !=1) {
		$error .= "No matching IDs";
	}
	
	// Initialize array variable
	$return_array = array();
	while ($row = $result->fetch_assoc()) {
		$return_array[] = $row;
	}
	
	// Return array in JSON format
	return json_encode($return_array);
}


/**
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

//checks if GET request is invalid
function handle_get_request() {
	if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
		header("HTTP/1.1 405 Method Not Allowed");
		return;
}
	$id = isset($_GET['id']) ? $_GET['id'] : False;
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
	//successful database read, return the data with normal header 200 OK
	echo $json;
}

handle_get_request();
 ?>
