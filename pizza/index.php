<!DOCTYPE html>

<html>
<head> 
    <title>Poppa's Pizza</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
	<div id="main">
	<h1>Welcome to Poppa's Pizza</h1>
	<?php
	// Turn on error reporting
   ini_set('display_errors', 1);
   error_reporting(E_ALL);

	// Include the pizza validation functions
	include ("includes/pizzaFunctions.php");

        //See if the form has been submitted
        if (isset($_GET['submit'])) {
     
             //Create a boolean flag to track validation errors
             $isValid = true;
     
             //Check first name
             if (validName($_GET['fname'])) {
                 $fname = $_GET['fname'];
             } else {
                 print "<p>Please enter your first name.</p>";
                 $isValid = false;
             }
     
             //Check last name
             if (validName($_GET['lname'])) {
                 $lname = $_GET['lname'];
             } else {
                 print "<p>Please enter your last name.</p>";
                 $isValid = false;
             }
			 
			 
			//Get the method (pick up or delivery)
			$method = "";
			if (isset($_GET['method']) && validDelivery($_GET['method'])) {
				$method = $_GET['method'];
				//Check for address if method is delivery
				if ($method == 'delivery') {
					if (!empty($_GET['address'])) {
					$address = $_GET['address'];
					} else {
						print '<p>If you want delivery, please enter a an address.</p>';
						$isValid = false;
					}
				}
			} else {
				print "<p>Please select Pick-up or Delivery.</p>";
				$isValid = false;                
			}
			
			//Get toppings
			if (isset($_GET['toppings'])) {
				$toppings = $_GET['toppings'];
				if (!validToppings($toppings)) {
					print "<p>There has been an error. Please only select from toppings originally listed.</p>";
					$isValid = false;
					return;
				}
				$toppingCount = sizeof($toppings);
			} else {
                 print "<p>Please select your toppings.</p>";
                 $isValid = false;
             }
			
			//Get Crust Type
			if (isset($_GET['crust'])) {
				$crust = $_GET['crust'];
				if (!validCrust($crust)) {
					print "<p>There has been an error. Please only select from crusts originally listed.</p>";
					$isValid = false;
					return;
				}
				
			} else {
                 print "<p>Please select your crust type.</p>";
                 $isValid = false;
             }
			
			//Get Size
			if (isset($_GET['size'])) {
				$size = $_GET['size'];
				if (!validSize($size)) {
					print "<p>There has been an error. Please only select small, medium, or large.<p>";
					$isValid = false;
					return;
				} elseif ($size == "none") {
					print "<p>Please select which size pizza you would like to enjoy today.<p>";
					$isValid = false;
				} 
				
			} else {
                 print "<p>Please select the size of your pizza.</p>";
				 $isValid = false;
                 
             }
			
			
			//Summary
			if ($isValid) {
			print "Thank you for your order, $fname $lname";
		    print "<p>Method: $method</p>";

		    //Display address if method is delivery
		    if ($method == "delivery") {
				print "<p>Address: $address</p>";
		    }

		    //Display toppings if selected
		    if ($toppingCount > 0) {
				print "<p>Toppings: " . implode(", ", $toppings) . "</p>";
				print "<p>Topping count: $toppingCount</p>";
		    }

		    //We're done! Terminate the script.
		    return;
		}
	} //end of check for form submission


     ?>	

    
        
	<form method="get" action="">
            
		<fieldset>
			<legend>Contact Info</legend>
                First Name:&nbsp;<input type="text" size="20" maxlength="20" name="fname" id="fname"
			value="">&nbsp
		    Last Name:&nbsp;<input type="text" size="20" maxlength="20" name="lname" id="lname"
		        value=""><br>
		    <label>Address:<br>
                <textarea rows="5" cols="20" name="address"
					id="address"></textarea>
            </label>
        </fieldset>

		<fieldset>
            <legend>Choose One</legend>
		    <label><input type="radio" value="pickup" name="method" id="method" 		    >&nbsp;Pick-up</label><br>
		    <label><input type="radio" value="delivery" name="method" id="method" 		    >&nbsp;Delivery</label>		
        </fieldset>

		<fieldset>
			<legend>Toppings</legend>
		    
		    <label><input type='checkbox'
				value='pepperoni' name='toppings[]' >Pepperoni</label><br><label><input type='checkbox'
				value='sausage' name='toppings[]' >Sausage</label><br><label><input type='checkbox'
				value='olives' name='toppings[]' >Olives</label><br><label><input type='checkbox'
				value='artichokes' name='toppings[]' >Artichokes</label><br><label><input type='checkbox'
				value='anchovies' name='toppings[]' >Anchovies</label><br>        </fieldset>

		<fieldset>
            <legend>Crust</legend>

		    <label><input type='radio' value='thin' name='crust' >Thin</label><br>
			<label><input type='radio' value='thick' name='crust' >Thick</label><br>
			<label><input type='radio' value='wheat' name='crust' >Wheat</label><br>
			<label><input type='radio' value='gluten-free' name='crust' >Gluten-free</label><br>			    
        </fieldset>
				
		<fieldset>
            <legend>Select Size</legend>
		    <select name="size" id="size">
			<option value="none">Select a Size</option>
			<option value='small'>Small</option>
			<option value='medium'>Medium</option>
			<option value='large'>Large</option>				
			
		    </select>
		</fieldset>
		
		<p><input type="submit" id="submit" name="submit" value="Submit your order" /></p>
	</form>
    </div>
</body>
</html>
