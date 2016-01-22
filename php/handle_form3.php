<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Form Feedback</title>
	<style type="text/css" title="text/css" media="all">
		.error {
			font-weight:bold;
			color: #C00;
		}
		
	</style>
    </head>
<body>
    <?php #Script 2.4 - handle_form.php #3
		# Created Jan 16th 2016
        # Created by Jami Schwarzwalder
       
    
    //Validate the name:
	if (!empty($_REQUEST['name'])) {
		$name = $_REQUEST['name'];
	} else {
		$name = NULL;
		echo '<p class="error">Your forgot to enter you name!</p>';
	}
    
	 //Validate the email:
	if (!empty($_REQUEST['email'])) {
		$email = $_REQUEST['email'];
	} else {
		$email = NULL;
		echo '<p class="error">Your forgot to enter you email address!</p>';
	}
     //Validate the comments:
	if (!empty($_REQUEST['comments'])) {
		$comments = $_REQUEST['comments'];
	} else {
		$comments = NULL;
		echo '<p class="error">Your forgot to enter you comments!</p>';
	}
    
	// Validates gender
     if (isset($_REQUEST['gender'])) {
		$gender = $_REQUEST['gender'];
			if ($gender == 'M') {
				echo '<p><b>Good day, Sir!</b></p>';
			} elseif ($gender == 'F') {
				echo '<p><b>Good day, my Lady!</b></p>';
			} else { // Unacceptable value.
				$gender = NULL;
				echo '<p class="error">Gender should be either "M" or F"!</p>';
			}
	 } else { // $_REQUEST['gender'] is not set.
			$gender = NULL;
			echo '<p class="error">You fortot to select your gender!</p>';
	 }
	 
     // If everything is OK, print the message:
	 if ($name && $email && $gender && $comments) {
		
	 
     echo "<p>Thank you, <b>$name</b>, for the following comments:<br/>
     <tt>$comments</tt></p>
     <p>We will reply to you at <i>$email</i>.</p>\n";
	 } else { //Missing form value.
		echo '<p class="error">Please go back and fill out the form again.</p>';
	}
	 
	  

    ?>
    
</body>