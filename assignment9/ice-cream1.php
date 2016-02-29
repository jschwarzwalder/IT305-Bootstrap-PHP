<?php
	session_start();
		$_SESSION['name'] = $_POST['name'];
		$_SESSION['flavor'] = $_POST['flavor'];
		
	//redirect
   header("Location: ice-cream2.php");
?>
