<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Hello</title>
  </head>
  <body>
    <pre>
 <?php
    print_r ($_GET);
    /*
     *    [first] => Joe
     *     [age] => 34
     *     [color] => blue
     * 
      */
    
    $valid = true;
    
    //Validate Name
    if (!empty($_REQUEST['first'])) {
		$email = $_REQUEST['first'];
	} else {
        $valid = false;
		$email = NULL;
		echo '<p class="error">Please enter a first name.</p>';
	}
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
    
    if (isset($GET['color'])) {
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
      echo "<p>Hello, ". $_GET['first'] . ". Our records indicated that you are " . $_GET['age'] . " years old, and your favorite color is " . $_GET['color'];
    }
?>
</pre>
 
  </body>
</html>    