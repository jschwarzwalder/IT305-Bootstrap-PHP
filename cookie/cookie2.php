<?php 
 /* Jami Schwarzwalder
  * 2/24/2016
  * http://http://jschwarzwalder.greenrivertech.net/it305/cookie/cookie2s.php
  */
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cookie 2</title>
  </head>
  <body>
	<?php
	echo "Hello,  " . $_COOKIE['first'];
	echo "<p>You are {$_COOKIE['age']} years old ";
	echo 'and you like the color ' . $_COOKIE['color'] . '.</p>';

	?>
</body>
</html>    