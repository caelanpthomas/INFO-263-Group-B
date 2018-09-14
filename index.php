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
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
	</nav>
	<!-- Page content -->
 <div class="container">
    <h1 class="mt-5 text-center">TyreTown</h1>
	<div id="address", class="address-bar">address</div>
	<div class="small-spacer"></div>
	<table class="header-table">
		<tr>
			<td class="header-table-left-column">GST Registration No.: <span id="gst_registration" class="header-table-data">123456789</span></td>
			<td class="header-table-right-column">Invoice ID.: <span id="invoice_id" class="header-table-data">123456789</span></td>
		</tr>
		<tr>
			<td class="header-table-left-column">Tel: <span id="tel" class="header-table-data">123456789</span></td>
			<td class="header-table-right-column">Date: <span id="date" class="header-table-data">123456789</span></td>
		</tr>
		<tr>
			<td class="header-table-left-column">Fax: <span id="fax" class="header-table-data">123456789</span></td>
			<td class="header-table-right-column">Due Date: <span id="due_date" class="header-table-data">123456789</span></td>
		</tr>
		<tr>
			<td class="header-table-left-column">Email: <span id="email" class="header-table-data">123456789</span></td>
			<td class="header-table-right-column">Salesperson: <span id="salesperson" class="header-table-data">123456789</span></td>
		</tr>
		<tr>
			<td class="header-table-left-column">Branch Name: <span id="branch_name" class="header-table-data">123456789</span></td>
			<td class="header-table-right-column"></td>
		</tr>
	</table>
	 
	<div class="medium-spacer"></div>
	 
	<table class="header-table">
		<tr>
			<td class="header-table-left-column">BILL TO:</span></td>
			<td class="header-table-right-column">FOR:</td>
		</tr>
		<tr>
			<td class="header-table-left-column"><span id="customer_name" class="header-table-data-bold">123456789</span></td>
			<td class="header-table-right-column">Model: <span id="car_model" class="header-table-data">123456789</span></td>
		</tr>
		<tr>
			<td class="header-table-left-column">Phone: <span id="customer_phone" class="header-table-data">123456789</span></td>
			<td class="header-table-right-column">Reg No.: <span id="reg_no" class="header-table-data">123456789</span></td>
		</tr>
		<tr>
			<td class="header-table-left-column">Email: <span id="customer_email" class="header-table-data">123456789</span></td>
			<td class="header-table-right-column">Chassis: <span id="salesperson" class="header-table-data">123456789</span></td>
		</tr>
		<tr>
			<td class="header-table-left-column"></td>
			<td class="header-table-right-column">VIN: <span id="vin" class="header-table-data">123456789</span></td>
		</tr>
		<tr>
			<td class="header-table-left-column"></td>
			<td class="header-table-right-column">Body Type: <span id="vehicle_body_type" class="header-table-data">123456789</span></td>
		</tr>
		<tr>
			<td class="header-table-left-column"></td>
			<td class="header-table-right-column">Year: <span id="vehicle_year" class="header-table-data">123456789</span></td>
		</tr>
		<tr>
			<td class="header-table-left-column"></td>
			<td class="header-table-right-column">License Plate: <span id="license_plate" class="header-table-data">123456789</span></td>
		</tr>
		<tr>
			<td class="header-table-left-column"></td>
			<td class="header-table-right-column">Odometer Reading: <span id="odometer_reading" class="header-table-data">123456789</span></td>
		</tr>
		<tr>
			<td class="header-table-left-column"></td>
			<td class="header-table-right-column">First Reg. Date: <span id="first_reg_date" class="header-table-data">123456789</span></td>
		</tr>
	</table>
	 
	<div class="medium-spacer"></div>
	 
	<table class="invoice-table">
		<tr>
			<th class="invoice-table-item-description">Description:</th>
			<th class="invoice-table-number">Qty:</th>
			<th class="invoice-table-number">Unit Price:</th>
			<th class="invoice-table-number">Amount:</th>
		</tr>
		<tr>
			<td class="invoice-table-item-description"><span id="invoice_item_description" class="invoice-table-data">123456789</span></td>
			<td class="invoice-table-number"><span id="invoice_item_quantity" class="invoice-table-data">123456789</span></td>
			<td class="invoice-table-number">$<span id="invoice_item_unit_price" class="invoice-table-data">123456789</span></td>
			<td class="invoice-table-number">$<span id="invoice_item_amount" class="invoice-table-data">123456789</span></td>
		</tr>
	</table>
	 
	<div class="small-spacer"></div>
	<span>
	<table class="invoice-totals-table">
		<tr>
			<td class="invoice-totals-table-data">Subtotal</td>
			<td class="invoice-totals-table-data">$<span id="subtotal">123456789</span></td>
		</tr>
		<tr>
			<td class="invoice-totals-table-data">GST</td>
			<td class="invoice-totals-table-data">$<span id="gst">123456789</span></td>
		</tr>
		<tr>
			<td class="invoice-totals-table-data">Total</td>
			<td class="invoice-totals-table-data">$<span id="total">123456789</span></td>
		</tr>
	</table>
	</span>
	 
	 
	<div class="big-spacer"></div>
	 
	<div class="terms-and-conditions">Goods are sold as per "Conditions of Sale" in our Credit Application. Returns limited to a maximum of thirty days. If TyreTown agrees that tyres can be returned, Fitting , Balancing , Tyre Disposal and freight costs incurred will be deducted from the credit. Tyre returns and claims must be returned promptly. Return freight is the client's responsibility. E&OE. In addition to the above arestocking charge will apply. Competition (Racing) and Rally tyres carry NO warranty.</div>
 
	<div class="medium-spacer"></div>
	
	<table class="wheel-alignment-test-results-table">
		<tr>
			<th colspan=3 width=50%></th>
			<th class="wheel-alignment-test-data">Before</th>
			<th class="wheel-alignment-test-data">Target Data</th>
			<th class="wheel-alignment-test-data">Actual</th>
		</tr>
		
	</table>
	
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
