<?php 
 /* Jami Schwarzwalder
  * 2/24/2016
  * http://http://jschwarzwalder.greenrivertech.net/it305/cookie/cookie2s.php
  */
  session_start();
  //have to add to the start of every page if we need to access the session informtion.
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Session 2</title>
  </head>
  <body>
	<?php
	echo "Hello,  " . $_SESSION['first'];
	echo "<p>You are {$_SESSION['age']} years old ";
	echo 'and you like the color ' . $_SESSION['color'] . '.</p>';

	?>
</body>
</html>    