<?php
	/* Jami Schwarzwalder
	*  2/28/2016
	*  http://jschwarzwalder.greenriver.net/it305/assignment9/registered.php
	*  Confirmation
	*/
	
	session_start();
	$fname = $_SESSION['fname'];
    	
	//Verify that username and password are valid, and then:
	session_regenerate_id();
	
	//Make sure we came from our own site
	if(!strstr($_SERVER['HTTP_REFERER'], "jschwarzwalder.greenrivertech.net")) {
		die("Error Processing Form");
		} else {
		
		echo $fname . ", you are successfully registered!" ;
		}
?>
<p><a href="register.php">Create another account.</a></p>