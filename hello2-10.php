<?php
 /*Jami Schwarzwalder
  *2/10/2016
  *http://jschwarzwalder.greenriver.net/it305/hello2-10.php
  */
  
  require '../../db.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Hello</title>
  </head>
  <body>

  <?php
  /*
   *Array
	(
		[first] => Joe
		[age] => 25
		[color] => blue
	)

	echo "<pre>";
    print_r($_GET);
	echo "</pre>";
*/	
	//If the form has been submitted
	if (isset($_GET['btnSubmit'])) {
	  $valid = true;
	  
	  //Validate name
	  if (!empty($_GET['first'])) {
		$first = $_GET['first'];
	  } else {
		echo "<p>Please enter a first name.</p>";
		$valid = false;
	  }
	  
	  //Validate age
	  if (!empty($_GET['age'])) {
		$age = $_GET['age'];
		
		if (!ctype_digit($age)) {
		  echo "<p>Age must be numeric.</p>";
		  $valid = false;
		}
	  } else {
		echo "<p>Please enter age.</p>";
		$valid = false;
	  }
	  
	  //Validate color
	  if (isset($_GET['color'])) {
		$color = $_GET['color'];
		$colors = array("red", "orange", "yellow", "green", "blue", "purple", "white", "black" );
		
		if (!in_array($color, $colors)) {
		  echo "<p>AAACK!!! Go away, evildoer!</p>";
		  $valid = false;
		}
	  } else {
		echo "<p>Please select a color.</p>";
		$valid = false;
	  }
	  
	  //Display summary
	  if ($valid) {
		echo "Hello, $first<br>";
		echo "Age: $age<br>";
		echo "Color: $color<br>";
		
		//Prevent SQL Injection
		$first = mysqli_real_escape_string($cnxn, $first);
		$age = mysqli_real_escape_string($cnxn, $age);
		$color = mysqli_real_escape_string($cnxn, $color);
		
		//Write to database
		$sql = "INSERT INTO hello (name, age, color)
			  VALUES ('$first', '$age', '$color')";
			  
		@mysqli_query($cnxn, $sql) or die ("Error excuting query: $sql");
		
		return;
	  }
	}
  ?>
 
   <form method="get" action="">
	<label>First name:
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
	    $colors = array("red", "orange", "yellow", "green", "blue", "purple", "white", "black" );
	    foreach ($colors as $aColor) {
	      echo "<input type='radio' name='color'
		  value='$aColor'";
		  
		  //Check to see if this is the selected color
		  if ($aColor == $color) {
			echo "checked";
		  }
		  echo ">$aColor<br>";
	    }
	  ?>
        
	<input type="submit" value="Submit" name="btnSubmit">
   </form>
   
   <h3>Submissions</h3>
   <?php
   $sql= "SELECT * FROM hello";
   $result = @mysqli_query($cnxn, $sql)
	or die ("Error executing query: $sql");
	while ($row = mysqli_fetch_array($result))
	{
	  $id = $row['id'];
	  $name = $row['name'];
	  $age = $row['age'];
	  $color = $row['color'];
	  echo "$id, $name, $age, $color<br />";
	  
	}
	?>
  </body>
</html>    