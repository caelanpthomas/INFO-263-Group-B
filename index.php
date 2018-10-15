<!-- This is your main page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tyre Town</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

 </head>
 <body>
   <!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#">Tyre Town</a>

		</div>
		<div class="search-container">
			<input id="search_term" class="form-control form-control-lg form-control-borderless" type="text" placeholder="Enter invoice ID..." oninput="search_invoice(this.value)"></input>
			<div id="searchDropdown" class="dropdown-content"></div>
		</div>
	</nav>
	<!-- Page content -->
 <div class="container">
    <h1 class="mt-5 text-center">TyreTown</h1>
	<div id="address", class="address-bar"></div>
	<div class="small-spacer"></div>

	<table class="header-table-left table">
		<tr>
			<td class="header-table-left-column">GST Registration No.: <span id="gst_registration" class="header-table-data"></span></td>
		</tr>
		<tr>
			<td class="header-table-left-column">Tel: <span id="tel" class="header-table-data"></span></td>
		</tr>
		<tr>
			<td class="header-table-left-column">Fax: <span id="fax" class="header-table-data"></span></td>
		</tr>
		<tr>
			<td class="header-table-left-column">Email: <span id="email" class="header-table-data"></span></td>
		</tr>
		<tr>
			<td class="header-table-left-column">Branch Name: <span id="branch_name" class="header-table-data"></span></td>
		</tr>
	</table>
	
	<table class="header-table-right table">
		<tr>
			<td class="header-table-right-column">Invoice ID.: <span id="invoice_id" class="header-table-data"></span></td>
		</tr>
		<tr>
			<td class="header-table-right-column">Date: <span id="date" class="header-table-data"></span></td>
		</tr>
		<tr>
			<td class="header-table-right-column">Due Date: <span id="due_date" class="header-table-data"></span></td>
		</tr>
		<tr>
			<td class="header-table-right-column">Salesperson: <span id="salesperson" class="header-table-data"></span></td>
		</tr>

	</table>
	 
	<div class="medium-spacer"></div>
	 
	<table class="header-table-left table">
		<tr>
			<td class="header-table-left-column">BILL TO:</span></td>
		</tr>
		<tr>
			<td class="header-table-left-column"><span id="customer_name" class="header-table-data-bold"></span></td>
		</tr>
		<tr>
			<td class="header-table-left-column">Phone: <span id="customer_phone" class="header-table-data"></span></td>
		</tr>
		<tr>
			<td class="header-table-left-column">Email: <span id="customer_email" class="header-table-data"></span></td>
			
		</tr>
		</tr>
		
			
	</table>
	
	<table class="header-table-right table">
		<tr>
			<td class="header-table-right-column">FOR:</td>
		</tr>
		<tr>
			<td class="header-table-right-column">Make: <span id="vehicle_make" class="header-table-data"></span></td>
		</tr>
		<tr>
			<td class="header-table-right-column">Model: <span id="vehicle_model" class="header-table-data"></span></td>
		</tr>
		<tr>
			<td class="header-table-right-column">Reg No.: <span id="license_plate" class="header-table-data"></span></td>
		</tr>
		<tr>
			<td class="header-table-right-column">Chassis: <span id="vehicle_chassis" class="header-table-data"></span></td>
		</tr>
		<tr>
			<td class="header-table-right-column">Body Type: <span id="vehicle_body_type" class="header-table-data"></span></td>
		</tr>
		<tr>
			<td class="header-table-right-column">Year: <span id="vehicle_year" class="header-table-data"></span></td>
		</tr>
		<tr>
			<td class="header-table-right-column">Odometer Reading: <span id="odometer_reading" class="header-table-data"></span></td>
		</tr>
		<tr>
			<td class="header-table-right-column">First Reg. Date: <span id="first_reg_date" class="header-table-data"></span></td>
		</tr>
		<tr>
			<td class="header-table-right-column">VIN: <span id="vin" class="header-table-data"></span></td>
		</tr>
		
			
	</table>
	 
	<div class="medium-spacer"></div>
	<div class="table-responsive">
		<table class="invoice-table">
			<tr>
				<th class="invoice-table-item-description">Description:</th>
				<th class="invoice-table-number">Qty:</th>
				<th class="invoice-table-number">Unit Price:</th>
				<th class="invoice-table-number">Amount:</th>
			</tr>
			<tr>
				<td class="invoice-table-item-description"><span id="invoice_item_description" class="invoice-table-data"></span></td>
				<td class="invoice-table-number"><span id="invoice_item_quantity" class="invoice-table-data"></span></td>
				<td class="invoice-table-number">$<span id="invoice_item_unit_price" class="invoice-table-data"></span></td>
				<td class="invoice-table-number">$<span id="invoice_item_amount" class="invoice-table-data"></span></td>
			</tr>
		</table>
	</div>
	<div class="small-spacer"></div>
	<span>
	<table class="invoice-totals-table">
		<tr>
			<td class="invoice-totals-table-data">Subtotal</td>
			<td class="invoice-totals-table-data">$<span id="subtotal"></span></td>
		</tr>
		<tr>
			<td class="invoice-totals-table-data">GST</td>
			<td class="invoice-totals-table-data">$<span id="gst"></span></td>
		</tr>
		<tr>
			<td class="invoice-totals-table-data">Total</td>
			<td class="invoice-totals-table-data">$<span id="total"></span></td>
		</tr>
	</table>
	</span>
	 
	 
	<div class="medium-spacer"></div>
	 
	<div class="terms-and-conditions">Goods are sold as per "Conditions of Sale" in our Credit Application. Returns limited to a maximum of thirty days. If TyreTown agrees that tyres can be returned, Fitting , Balancing , Tyre Disposal and freight costs incurred will be deducted from the credit. Tyre returns and claims must be returned promptly. Return freight is the client's responsibility. E&OE. In addition to the above arestocking charge will apply. Competition (Racing) and Rally tyres carry NO warranty.</div>
 
	<div class="medium-spacer"></div>
	
	<div class="header-table-data-bold">Inspection Date/Time: <span id="inspection_date_time" class="header-table-data"></span></div>
	
	<div class="medium-spacer"></div>
	<div class="table-responsive">
		<table class="wheel-alignment-test-results-table">
			<tr>
				<th colspan=4 width=50%></th>
				<th class="wheel-alignment-test-data-header">Before</th>
				<th width=20% class="wheel-alignment-test-data-header">Target Data</th>
				<th class="wheel-alignment-test-data-header">Actual</th>
			</tr>
			<tr>
				<td rowspan=7 class="wheel-alignment-header-1">Rear&nbsp;Axle</td>
				<td rowspan=3 colspan=2 class="wheel-alignment-header-2">Camber</td>
				<td class="wheel-alignment-header-3">left</td>
				<td class="wheel-alignment-data"><span id="rear_axle_camber_left_before"></span></td>
				<td rowspan=2 class="wheel-alignment-data"><span id="rear_axle_camber_left_right_target"></span></td>
				<td class="wheel-alignment-data"><span id="rear_axle_camber_left_actual"></span></td>
			</tr>
			<tr>
				<td class="wheel-alignment-header-3">right</td>
				<td class="wheel-alignment-data"><span id="rear_axle_camber_right_before"></span></td>
				<td class="wheel-alignment-data"><span id="rear_axle_camber_right_actual"></span></td>
			</tr>
			<tr>
				<td class="wheel-alignment-header-3">cross</td>
				<td class="wheel-alignment-data"><span id="rear_axle_camber_cross_before"></span></td>
				<td class="wheel-alignment-data"><span id="rear_axle_camber_cross_target"></span></td>
				<td class="wheel-alignment-data"><span id="rear_axle_camber_cross_actual"></span></td>
			</tr>
			<tr>
				<td rowspan=3 colspan=2 class="wheel-alignment-header-2">Toe</td>
				<td class="wheel-alignment-header-3">left</td>
				<td class="wheel-alignment-data"><span id="rear_axle_toe_left_before"></span></td>
				<td rowspan=2 class="wheel-alignment-data"><span id="rear_axle_toe_left_right_target"></span></td>
				<td class="wheel-alignment-data"><span id="rear_axle_toe_left_actual"></span></td>
			</tr>
			<tr>
				<td class="wheel-alignment-header-3">right</td>
				<td class="wheel-alignment-data"><span id="rear_axle_toe_right_before"></span></td>
				<td class="wheel-alignment-data"><span id="rear_axle_toe_right_actual"></span></td>
			</tr>
			<tr>
				<td class="wheel-alignment-header-3">total</td>
				<td class="wheel-alignment-data"><span id="rear_axle_toe_total_before"></span></td>
				<td class="wheel-alignment-data"><span id="rear_axle_toe_total_target"></span></td>
				<td class="wheel-alignment-data"><span id="rear_axle_toe_total_actual"></span></td>
			</tr>
			<tr>
				<td colspan=2 class="wheel-alignment-header-2">Geometrical driving axis</td>
				<td class="wheel-alignment-header-3"></td>
				<td class="wheel-alignment-data"><span id="rear_axle_geometrical_driving_axis_before"></span></td>
				<td class="wheel-alignment-data"><span id="rear_axle_geometrical_driving_axis_target"></span></td>
				<td class="wheel-alignment-data"><span id="rear_axle_geometrical_driving_axis_actual"></span></td>
			</tr>
			
			<tr>
				<td rowspan=19 class="wheel-alignment-header-1">Front&nbsp;Axle</td>
				<td colspan=2 rowspan=3 class="wheel-alignment-header-2">Camber</td>
				<td class="wheel-alignment-header-3">left</td>
				<td class="wheel-alignment-data"><span id="front_axle_camber_left_before"></span></td>
				<td rowspan=2 class="wheel-alignment-data"><span id="front_axle_camber_left_right_target"></span></td>
				<td class="wheel-alignment-data"><span id="front_axle_camber_left_actual"></span></td>
			</tr>
			<tr>
				<td class="wheel-alignment-header-3">right</td>
				<td class="wheel-alignment-data"><span id="front_axle_camber_right_before"></span></td>
				<td class="wheel-alignment-data"><span id="front_axle_camber_right_actual"></span></td>
			</tr>
			<tr>
				<td class="wheel-alignment-header-3">cross</td>
				<td class="wheel-alignment-data"><span id="front_axle_camber_cross_before"></span></td>
				<td class="wheel-alignment-data"><span id="front_axle_camber_cross_target"></span></td>
				<td class="wheel-alignment-data"><span id="front_axle_camber_cross_actual"></span></td>
			</tr>
			<tr>
				<td colspan=2 rowspan=3 class="wheel-alignment-header-2">Caster</td>
				<td class="wheel-alignment-header-3">left</td>
				<td class="wheel-alignment-data"><span id="front_axle_caster_left_before"></span></td>
				<td rowspan=2 class="wheel-alignment-data"><span id="front_axle_caster_left_right_target"></span></td>
				<td class="wheel-alignment-data"><span id="front_axle_caster_left_actual"></span></td>
			</tr>
			<tr>
				<td class="wheel-alignment-header-3">right</td>
				<td class="wheel-alignment-data"><span id="front_axle_caster_right_before"></span></td>
				<td class="wheel-alignment-data"><span id="front_axle_caster_right_actual"></span></td>
			</tr>
			<tr>
				<td class="wheel-alignment-header-3">cross</td>
				<td class="wheel-alignment-data"><span id="front_axle_caster_cross_before"></span></td>
				<td class="wheel-alignment-data"><span id="front_axle_caster_cross_target"></span></td>
				<td class="wheel-alignment-data"><span id="front_axle_caster_cross_actual"></span></td>
			</tr>
			<tr>
				<td colspan=2 rowspan=3 class="wheel-alignment-header-2">SAI</td>
				<td class="wheel-alignment-header-3">left</td>
				<td class="wheel-alignment-data"><span id="front_axle_sai_left_before"></span></td>
				<td rowspan=2 class="wheel-alignment-data"><span id="front_axle_sai_left_right_target"></span></td>
				<td class="wheel-alignment-data"><span id="front_axle_sai_left_actual"></span></td>
			</tr>
			<tr>
				<td class="wheel-alignment-header-3">right</td>
				<td class="wheel-alignment-data"><span id="front_axle_sai_right_before"></span></td>
				<td class="wheel-alignment-data"><span id="front_axle_sai_right_actual"></span></td>
			</tr>
			<tr>
				<td class="wheel-alignment-header-3">cross</td>
				<td class="wheel-alignment-data"><span id="front_axle_sai_cross_before"></span></td>
				<td class="wheel-alignment-data"><span id="front_axle_sai_cross_target"></span></td>
				<td class="wheel-alignment-data"><span id="front_axle_sai_cross_actual"></span></td>
			</tr>
			<tr>
				<td colspan=2 rowspan=2 class="wheel-alignment-header-2">Track differential angle</td>
				<td class="wheel-alignment-header-3">left</td>
				<td class="wheel-alignment-data"><span id="front_axle_track_differential_angle_left_before"></span></td>
				<td rowspan=2 class="wheel-alignment-data"><span id="front_axle_track_differential_angle_left_right_target"></span></td>
				<td class="wheel-alignment-data"><span id="front_axle_track_differential_angle_left_actual"></span></td>
			</tr>
			<tr>
				<td class="wheel-alignment-header-3">right</td>
				<td class="wheel-alignment-data"><span id="front_axle_track_differential_angle_right_before"></span></td>
				<td class="wheel-alignment-data"><span id="front_axle_track_differential_angle_right_actual"></span></td>
			</tr>
			<tr>
				<td colspan=2 rowspan=3 class="wheel-alignment-header-2">Toe</td>
				<td class="wheel-alignment-header-3">left</td>
				<td class="wheel-alignment-data"><span id="front_axle_toe_left_before"></span></td>
				<td rowspan=2 class="wheel-alignment-data"><span id="front_axle_toe_left_right_target"></span></td>
				<td class="wheel-alignment-data"><span id="front_axle_toe_left_actual"></span></td>
			</tr>
			<tr>
				<td class="wheel-alignment-header-3">right</td>
				<td class="wheel-alignment-data"><span id="front_axle_toe_right_before"></span></td>
				<td class="wheel-alignment-data"><span id="front_axle_toe_right_actual"></span></td>
			</tr>
			<tr>
				<td class="wheel-alignment-header-3">total</td>
				<td class="wheel-alignment-data"><span id="front_axle_toe_total_before"></span></td>
				<td class="wheel-alignment-data"><span id="front_axle_toe_total_target"></span></td>
				<td class="wheel-alignment-data"><span id="front_axle_toe_total_actual"></span></td>
			</tr>
			<tr>
				<td colspan=2 class="wheel-alignment-header-2">Setback</td>
				<td class="wheel-alignment-header-3"></td>
				<td class="wheel-alignment-data"><span id="front_axle_setback_before"></span></td>
				<td class="wheel-alignment-data"><span id="front_axle_setback_target"></span></td>
				<td class="wheel-alignment-data"><span id="front_axle_setback_actual"></span></td>
			</tr>
			<tr>
				<td rowspan=4 class="wheel-alignment-header-2">Max steer lock</td>
				<td rowspan=2 class="wheel-alignment-header-2">left steer</td>
				<td class="wheel-alignment-header-3">left</td>
				<td class="wheel-alignment-data"><span id="front_axle_max_steering_lock_left_steer_left_before"></span></td>
				<td class="wheel-alignment-data"><span id="front_axle_max_steering_lock_left_steer_left_target"></span></td>
				<td class="wheel-alignment-data"><span id="front_axle_max_steering_lock_left_steer_left_actual"></span></td>
			</tr>
			<tr>
				<td class="wheel-alignment-header-3">right</td>
				<td class="wheel-alignment-data"><span id="front_axle_max_steering_lock_left_steer_right_before"></span></td>
				<td class="wheel-alignment-data"><span id="front_axle_max_steering_lock_left_steer_right_target"></span></td>
				<td class="wheel-alignment-data"><span id="front_axle_max_steering_lock_left_steer_right_actual"></span></td>
			</tr>
			<tr>
				<td rowspan=2 class="wheel-alignment-header-2">right steer</td>
				<td class="wheel-alignment-header-3">left</td>
				<td class="wheel-alignment-data"><span id="front_axle_max_steering_lock_right_steer_left_before"></span></td>
				<td class="wheel-alignment-data"><span id="front_axle_max_steering_lock_right_steer_left_target"></span></td>
				<td class="wheel-alignment-data"><span id="front_axle_max_steering_lock_right_steer_left_actual"></span></td>
			</tr>
			<tr>
				<td class="wheel-alignment-header-3">right</td>
				<td class="wheel-alignment-data"><span id="front_axle_max_steering_lock_right_steer_right_before"></span></td>
				<td class="wheel-alignment-data"><span id="front_axle_max_steering_lock_right_steer_right_target"></span></td>
				<td class="wheel-alignment-data"><span id="front_axle_max_steering_lock_right_steer_right_actual"></span></td>
			</tr>
		</table>
	</div>
	<div class="medium-spacer"></div>
 
 </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                    crossorigin="anonymous">
            </script>
            <script
                    src="https://code.jquery.com/jquery-3.3.1.min.js"
                    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                    crossorigin="anonymous">
            </script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                    crossorigin="anonymous">
            </script>
            <script src="script/scripts.js"></script>
 </body>
