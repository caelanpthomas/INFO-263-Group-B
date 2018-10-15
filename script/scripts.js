// GLOBALS
var GST_RATE = 0.15;

/* On page load, we want to send an AJAX request for the target values
 * for the wheel alignment - as they never change, and then add them to 
 * the page if (and when) a valid response comes back.
 */
$(document).ready(function() {
    // Set up an AJAX request
	$.ajax({url: "target_information.php", success: function(result){

		// Parsing the JSON returned from the server so we can access the data
		var target_information = JSON.parse(result)[0];
		
		// Update the html of the corresponding spans with the target data returned from the database.
		$("#rear_axle_camber_left_right_target").html(target_information.rear_axle_camber_left_right_target);
		$("#rear_axle_camber_cross_target").html(target_information.rear_axle_camber_cross_target);
		$("#rear_axle_toe_left_right_target").html(target_information.rear_axle_toe_left_right_target);
		$("#rear_axle_toe_total_target").html(target_information.rear_axle_toe_total_target);
		$("#rear_axle_geometrical_driving_axis_target").html(target_information.rear_axle_geometrical_driving_axis_target);
		$("#front_axle_camber_left_right_target").html(target_information.front_axle_camber_left_right_target);
		$("#front_axle_camber_cross_target").html(target_information.front_axle_camber_cross_target);
		$("#front_axle_caster_left_right_target").html(target_information.front_axle_caster_left_right_target);
		$("#front_axle_caster_cross_target").html(target_information.front_axle_caster_cross_target);
		$("#front_axle_sai_left_right_target").html(target_information.front_axle_sai_left_right_target);
		$("#front_axle_sai_cross_target").html(target_information.front_axle_sai_cross_target);
		$("#front_axle_track_differential_angle_left_right_target").html(target_information.front_axle_track_differential_angle_left_right_target);
		$("#front_axle_toe_left_right_target").html(target_information.front_axle_toe_left_right_target);
		$("#front_axle_toe_total_target").html(target_information.front_axle_toe_total_target);
		$("#front_axle_setback_target").html(target_information.front_axle_setback_target);
		$("#front_axle_max_steering_lock_left_steer_left_target").html(target_information.front_axle_max_steering_lock_left_steer_left_target);
		$("#front_axle_max_steering_lock_left_steer_right_target").html(target_information.front_axle_max_steering_lock_left_steer_right_target);
		$("#front_axle_max_steering_lock_right_steer_left_target").html(target_information.front_axle_max_steering_lock_right_steer_left_target);
		$("#front_axle_max_steering_lock_right_steer_right_target").html(target_information.front_axle_max_steering_lock_right_steer_right_target);
		
	}, error: function(xhr, status, error){
		console.log("An error occurred while fetching the target wheel alignment data");
	}});
});


/* Sends an AJAX request to the server requesting the data from a wheel alignment using 
 * an invoice ID number. Updates the correct spans on the page if and when a valid 
 * response is returned from the server.
 */
function fetch_invoice(invoice_id) {
	
	// First cleaning up the dropdown: 
	$("#searchDropdown").html("");	
	$("#searchDropdown").hide();
	$("#search_term").val("");
				
	$.ajax({url: "database.php?method=retreive_invoice&id=" + invoice_id, success: function(result){
		
		// Parsing the JSON returned from the server so we can access the data
		var invoice_information = JSON.parse(result)[0];
		
		$("#address").html(invoice_information.branch_address);
		$("#email").html(invoice_information.branch_email);
		$("#fax").html(invoice_information.branch_fax);
		$("#gst_registration").html(invoice_information.branch_gst_registration);
		$("#branch_name").html(invoice_information.branch_name);
		$("#tel").html(invoice_information.branch_phone);
		$("#date").html(invoice_information.date);
		$("#invoice_item_description").html(invoice_information.description);
		$("#due_date").html(invoice_information.due_date);
		$("#front_axle_sai_cross_actual").html(invoice_information.front_axle_SAI_cross_actual);
		$("#front_axle_sai_cross_before").html(invoice_information.front_axle_SAI_cross_before);
		$("#front_axle_sai_left_actual").html(invoice_information.front_axle_SAI_left_actual);
		$("#front_axle_sai_left_before").html(invoice_information.front_axle_SAI_left_before);
		$("#front_axle_sai_right_actual").html(invoice_information.front_axle_SAI_right_actual);
		$("#front_axle_sai_right_before").html(invoice_information.front_axle_SAI_right_before);
		$("#front_axle_camber_cross_actual").html(invoice_information.front_axle_camber_cross_actual);
		$("#front_axle_camber_cross_before").html(invoice_information.front_axle_camber_cross_before);
		$("#front_axle_camber_left_actual").html(invoice_information.front_axle_camber_left_actual);
		$("#front_axle_camber_left_before").html(invoice_information.front_axle_camber_left_before);
		$("#front_axle_camber_right_actual").html(invoice_information.front_axle_camber_right_actual);
		$("#front_axle_camber_right_before").html(invoice_information.front_axle_camber_right_before);
		$("#front_axle_caster_cross_actual").html(invoice_information.front_axle_caster_cross_actual);
		$("#front_axle_caster_cross_before").html(invoice_information.front_axle_caster_cross_before);
		$("#front_axle_caster_left_actual").html(invoice_information.front_axle_caster_left_actual);
		$("#front_axle_caster_left_before").html(invoice_information.front_axle_caster_left_before);
		$("#front_axle_caster_right_actual").html(invoice_information.front_axle_caster_right_actual);
		$("#front_axle_caster_right_before").html(invoice_information.front_axle_caster_right_before);
		$("#front_axle_max_steering_lock_left_steer_left_actual").html(invoice_information.front_axle_max_steering_lock_left_steer_left_actual);
		$("#front_axle_max_steering_lock_left_steer_left_before").html(invoice_information.front_axle_max_steering_lock_left_steer_left_before);
		$("#front_axle_max_steering_lock_left_steer_right_actual").html(invoice_information.front_axle_max_steering_lock_left_steer_right_actual);
		$("#front_axle_max_steering_lock_left_steer_right_before").html(invoice_information.front_axle_max_steering_lock_left_steer_right_before);
		$("#front_axle_max_steering_lock_right_steer_left_actual").html(invoice_information.front_axle_max_steering_lock_right_steer_left_actual);
		$("#front_axle_max_steering_lock_right_steer_left_before").html(invoice_information.front_axle_max_steering_lock_right_steer_left_before);
		$("#front_axle_max_steering_lock_right_steer_right_actual").html(invoice_information.front_axle_max_steering_lock_right_steer_right_actual);
		$("#front_axle_max_steering_lock_right_steer_right_before").html(invoice_information.front_axle_max_steering_lock_right_steer_right_before);
		$("#front_axle_setback_actual").html(invoice_information.front_axle_setback_actual);
		$("#front_axle_setback_before").html(invoice_information.front_axle_setback_before);
		$("#front_axle_toe_left_actual").html(invoice_information.front_axle_toe_left_actual);
		$("#front_axle_toe_left_before").html(invoice_information.front_axle_toe_left_before);
		$("#front_axle_toe_right_actual").html(invoice_information.front_axle_toe_right_actual);
		$("#front_axle_toe_right_before").html(invoice_information.front_axle_toe_right_before);
		$("#front_axle_toe_total_actual").html(invoice_information.front_axle_toe_total_actual);
		$("#front_axle_toe_total_before").html(invoice_information.front_axle_toe_total_before);
		$("#front_axle_track_differential_angle_left_actual").html(invoice_information.front_axle_track_differential_angle_left_actual);
		$("#front_axle_track_differential_angle_left_before").html(invoice_information.front_axle_track_differential_angle_left_before);
		$("#front_axle_track_differential_angle_right_actual").html(invoice_information.front_axle_track_differential_angle_right_actual);
		$("#front_axle_track_differential_angle_right_before").html(invoice_information.front_axle_track_differential_angle_right_before);
		$("#inspection_date_time").html(invoice_information.inspection_date_time);
		$("#invoice_id").html(invoice_information.invoice_id);
		$("#customer_email").html(invoice_information.owner_email);
		$("#customer_name").html(invoice_information.owner_fname + " " + invoice_information.owner_lname);
		$("#customer_phone").html(invoice_information.owner_phone);
		$("#invoice_item_quantity").html(invoice_information.quantity);
		$("#rear_axle_camber_cross_actual").html(invoice_information.rear_axle_camber_cross_actual);
		$("#rear_axle_camber_cross_before").html(invoice_information.rear_axle_camber_cross_before);
		$("#rear_axle_camber_left_actual").html(invoice_information.rear_axle_camber_left_actual);
		$("#rear_axle_camber_left_before").html(invoice_information.rear_axle_camber_left_before);
		$("#rear_axle_camber_right_actual").html(invoice_information.rear_axle_camber_right_actual);
		$("#rear_axle_camber_right_before").html(invoice_information.rear_axle_camber_right_before);
		$("#rear_axle_geometrical_driving_axis_actual").html(invoice_information.rear_axle_geometrical_driving_axis_actual);
		$("#rear_axle_geometrical_driving_axis_before").html(invoice_information.rear_axle_geometrical_driving_axis_before);
		$("#rear_axle_toe_left_actual").html(invoice_information.rear_axle_toe_left_actual);
		$("#rear_axle_toe_left_before").html(invoice_information.rear_axle_toe_left_before);
		$("#rear_axle_toe_right_actual").html(invoice_information.rear_axle_toe_right_actual);
		$("#rear_axle_toe_right_before").html(invoice_information.rear_axle_toe_right_before);
		$("#rear_axle_toe_total_actual").html(invoice_information.rear_axle_toe_total_actual);
		$("#rear_axle_toe_total_before").html(invoice_information.rear_axle_toe_total_before);
		$("#salesperson").html(invoice_information.technician_name);
		$("#invoice_item_unit_price").html(invoice_information.unit_price);
		$("#vehicle_body_type").html(invoice_information.vehicle_body_type);
		$("#vehicle_chassis").html(invoice_information.vehicle_chassis);
		$("#first_reg_date").html(invoice_information.vehicle_first_registration_date);
		$("#vin").html(invoice_information.vehicle_id);
		$("#vehicle_make").html(invoice_information.vehicle_make);
		$("#vehicle_model").html(invoice_information.vehicle_model);
		$("#odometer_reading").html(invoice_information.vehicle_odometer_reading);
		$("#license_plate").html(invoice_information.vehicle_registration);
		$("#vehicle_year").html(invoice_information.vehicle_year);
		$("#vehicle_body_type").html(invoice_information.vehicle_chassis);
		
		// Now calculating totals and GST and entering them into the correct spans.
		calculate_totals(invoice_information.unit_price, invoice_information.quantity);
		
	}, error: function(xhr, status, error){
		console.log("An error occured while fetching the invoice data for invoice ID " + invoice_id + "\n" + xhr);
	}});
}

/* Calculate the subtotal, GST, and total cost, and places the data into the correct spans */
function calculate_totals(unit_price, quantity) {
	var subtotal = unit_price * quantity;
	var gst = subtotal * GST_RATE;
	var total = subtotal + gst;
	
	// Rounding to 2dp (as we are dealing with currency)
	subtotal = subtotal.toFixed(2);
	gst = gst.toFixed(2);
	total = total.toFixed(2);
	
	// Now adding these values into the correct spans.
	$("#invoice_item_amount").html(subtotal);
	$("#subtotal").html(subtotal);
	$("#gst").html(gst);
	$("#total").html(total);
}

/* Sends an AJAX request to the server which returns a list
 * of invoice numbers which match the search term.
 */
function search_invoice(search_term) {
	// First collect the search term from the input box
	
	// If search term is empty then make sure that drop down list is removed:
	if (search_term == "") {
		// Hide the dropdown as there is no search term.
		$("#searchDropdown").hide();
	} else {
		// Query the database with the search term, and add the results to the dropdown list.
		$.ajax({url: "database.php?method=search&search_term=" + search_term, success: function(result){
			var inner_html = "";
			var terms = JSON.parse(result);
		
			// First check if any results have been returned. 
			if (terms.length == 0) {
				// There are no results. Add a dropdown item which is not clickable
				inner_html = inner_html + "<div class='dropdown-message'>No results returned</div>";
			} else {
				// Add a dropdown item for each of the returned results
				for (var i = 0; i < terms.length; i++) {
					inner_html = inner_html + "<div class='dropdown-item' onclick='fetch_invoice(\"" + terms[i].invoice_id + "\")'>" + terms[i].invoice_id + "</div>";
				}
			}
			
			// Set the html of the dropdown, and show it on the page
			$("#searchDropdown").html(inner_html);
			$("#searchDropdown").show();
		}, error: function(xhr, status, error){
		console.log("An error occurred while fetching the invoice data for invoice ID " + invoice_id + "\n" + xhr);
		}});
	}
}

// Hiding the drop down box when you click out of it
window.onclick = function(event) {
	if (event.target.matches('#search_term')) {
		$("#searchDropdown").show();
	} else {
		$("#searchDropdown").hide();
	}
}
