<?php
	session_start();
		$_SESSION['fname'] = $_POST['fname'];
        
		
		//redirect
	   header("Location: registered.php");
?>
