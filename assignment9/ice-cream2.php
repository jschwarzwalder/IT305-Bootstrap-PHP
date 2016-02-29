<?php
	session_start();
		$name = $_SESSION['name'];
		$flavor = $_SESSION['flavor'];
		echo $name . " likes " . $flavor 
		. " ice cream.";
?>
<p><a href="ice-cream.html">Enter again.</a></p>