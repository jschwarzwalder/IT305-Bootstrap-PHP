<?php
	// Turn on error reporting
   ini_set('display_errors', 1);
   error_reporting(E_ALL);

	// Include the pizza validation functions
	include ("includes/pizzaFunctions.php");
?>

<!DOCTYPE html>

<html>
<head> 
    <title>Poppa's Pizza</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
    <?php
        //See if the form has been submitted
        if (isset($_GET['submit'])) {
     
             //Create a boolean flag to track validation errors
             $isValid = true;
     
             //Check first name
             if (validName($_GET['fname'])) {
                 $fname = $_GET['fname'];
             } else {
                 print "<p>Invalid first name.</p>";
                 $isValid = false;
             }
     
             //Check last name
             if (validName($_GET['lname'])) {
                 $lname = $_GET['lname'];
             } else {
                 print "<p>Invalid last name.</p>";
                 $isValid = false;
             }
         }
     ?>	

    <div id="main">
	<h1>Welcome to Poppa's Pizza</h1>

        
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

		    <label><input type='radio' value='thin' name='crust' >Thin</label><br><label><input type='radio' value='thick' name='crust' >Thick</label><br><label><input type='radio' value='wheat' name='crust' >Wheat</label><br><label><input type='radio' value='gluten-free' name='crust' >Gluten-free</label><br>			    
        </fieldset>
				
		<fieldset>
            <legend>Select Size</legend>
		    <select name="size" id="size">
			<option value="none">Select a Size</option>
			<option value='small'>Small</option><option value='medium'>Medium</option><option value='large'>Large</option>				
			
		    </select>
		</fieldset>
		
		<p><input type="submit" id="submit" name="submit" value="Submit your order" /></p>
	</form>
    </div>
</body>
</html>
