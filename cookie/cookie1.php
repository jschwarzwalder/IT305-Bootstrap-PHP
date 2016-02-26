<?php 
 /* Jami Schwarzwalder
  * 2/24/2016
  * http://http://jschwarzwalder.greenrivertech.net/it305/cookie/cookie1.php
  */
 
if (isset($_GET['btnSubmit']))
{
  $first = $_GET['first'];
  $age = $_GET['age'];
  $color = $_GET['color'];
  
  // set cookie requires name ie "string" and parameter/value
  setcookie ("first", $first);
  setcookie ("age", $age);
  setcookie ("color", $color);
  
  //Remmber any thing before <?php will break form. space or enter before <?php will even do it.
  
  echo '<p>Thank you for submitting</p>';
  echo '<p><a href="cookie2.php">Go to another page.</a></p>';
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Hello - Learning Cookie Sessions</title>
  </head>
  <body>

   
   <form method="get" action="">
	<label>First name:
          <input type="text" name="first"
				 value="">
        </label><br>
        
        <label>Age:
          <input type="text" name="age"
				 value="">
        </label><br>
	
	<label>Favorite Color:</label>
	<br>
	  <input type='radio' name='color'
		  value='red'>red<br><input type='radio' name='color'
		  value='blue'>blue<br><input type='radio' name='color'
		  value='yellow'>yellow<br>        
	<input type="submit" value="Submit" name="btnSubmit">
   </form>
   
</body>
</html>    