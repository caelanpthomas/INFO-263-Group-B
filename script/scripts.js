// Keep your scripts in here

// On page load, we want to send an AJAX request for the target values
// for the wheel alignment, and then add them to the page if (and when)
// a valid response comes back.
$( document ).ready(function() {
    // Set up an AJAX request
	$.ajax(url: "target_information.php", success: function(result){
		console.log(result);
		
		var target_information = JSON.parse(result);
		
		$("#rear_axle_camber_left_right_target").html(target_information.rear_axle_camber_left_right_target);
		$("#rear_axle_camber_cross_target").html(target_information.rear_axle_camber_cross_target);
		// etc. etc.
	}, error: function(xhr, status, error){
		// TODO: set a proper error function
		console.log("An error occured");
	});
});

function search_invoice_part_or_all(search_term) {
	/* Sends an AJAX request to the server which returns a list
	 * of invoice numbers which match the search term.
	 */
	
}
