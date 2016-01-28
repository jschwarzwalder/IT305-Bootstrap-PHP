
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Hello</title>
  </head>
  <body>
	  <?php
		
		/*
		 *    [first] => Joe
		 *     [age] => 34
		 *     [color] => blue
		 *
		 *		print_r ($_GET);
		  */
		//if the form has been submitted
		if (isset($_GET['btnSubmit'])) {
			$valid = true;
			
			//Validate Name
			if (!empty($_REQUEST['first'])) {
				$email = $_REQUEST['first'];
			} else {
				$valid = false;
				$email = NULL;
				echo '<p class="error">Please enter a first name.</p>';
			}
			
			//Validate Age
			 if (!empty($_GET['age'])) {
				$age = $_GET['age'];
				
				if (!ctype_digit($age)) {
				  echo "<p>Age must be numeric.</p>";
				  $valid = false;
				}
			} else {
				$valid = false;
				echo '<p class="error">Please enter your age.</p>';
			}
			
			//Validate Color
			if (isset($_GET['color'])) {
			  $color = $_GET['color'];
			  $colors = array("red", "blue", "yellow");
			  
			  if (!in_array($color, $colors)) {
				echo "<p>Stop hackin my code.</p> <p>You must select one of the colors I GAVE YOU.</p>";
				
			  }
			} else {
				$valid = false;
				echo '<p class="error">Please select one of the colors selected.</p>';
			}
			
			if ($valid) {
			  echo "<p>Hello, ". $_GET['first'] . ". Our records indicated that you are " ;
			  echo $_GET['age'] . " years old, and your favorite color is " . $_GET['color'];
			  
			  return;
			}
		}
	?>
   <form method="get" action="">
	<label>Please enter your first name:
          <input type="text" name="first"
				 value="<?php echo $first; ?>">
        </label><br>
        
        <label>Age:
          <input type="text" name="age"
				 value="<?php echo $age; ?>">
        </label><br>
	
	<label>Favorite Color:</label>
	<br>
	<?php
		$colors= array("red", "blue", "yellow");
		foreach ($colors as $aColor) {
		  echo "<input type='radio' name='color' value='$aColor'";
		  if ($color == $aColor){
			echo " checked ";
		  }
		  //Check to see if this is the selected color
		  echo ">$aColor<br>";
		}
		
	  //<input type='radio' name='color' value='red'>red<br>
	  //<input type='radio' name='color' value='blue'>blue<br>
	  //<input type='radio' name='color' value='yellow'>yellow<br>        
	
	?>
	<input type="submit" value="Submit" name="btnSubmit">
   </form>
   
  </body>
</html>    