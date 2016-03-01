<?php
	/* Jami Schwarzwalder
	*  2/28/2016
	*  http://jschwarzwalder.greenriver.net/it305/assignment9/register.php
	*  Security to Form
	*/
	
	//Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
  
	//Process the form…
	$fname="";
	$lname="";
	$email="";
					   
	//Form has been submitted 
	if (isset($_POST['submit'])) {
		
		//Where did we come from?
		$from = $_SERVER['HTTP_REFERER'];
	  
		//Make sure we came from our own site
		if (!strstr($from, "jschwarzwalder.greenrivertech.net")) {
			die("Error Processing Form");
			$isValid = false;
		 } else {
			$isValid = true;
			
			//Connect to database
			require ("../../../db.php");
	
			//Validate first name
			if (!empty($_POST['fname'])) {
				if (ctype_alpha($_POST['fname'])) {
					$fname = $_POST['fname'];
					$Er_fname=false;
				} else {
					$isValid = false;
					$Er_fname=true;
				}
				
			} else {
				$Er_fname=true;
				$isValid = false;
				
			}
	

			//Validate last name
			
			if (!empty($_POST['lname'])) {
				if (ctype_alpha($_POST['lname'])) {
					$lname = $_POST['lname'];
					$Er_lname=false;
				} else {
					$Er_lname=true;
					$isValid = false;
					$lname="";
				}
			} else {
				$Er_lname=true;
				$isValid = false;
				
			}
			
			//Validate SID
			
			if (!empty($_POST['email'])) {
				if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
					$email = $_POST['email'];
					$Er_email=false;
				} else {
					$isValid = false;
					$Er_email=true;
					
				}

			} else {
				$Er_email=true;
				$isValid = false;
			}
			
			//Validate Password
			$error = "";
			if (!empty($_POST['password1']) && !empty($_POST['password2'])) {
				if ($_POST['password1'] === $_POST['password2']){
					$password = $_POST['password1'];
					$Er_match = false;
					$Er_password = false;
					if( !preg_match("#[0-9]+#", $password ) ) {
						$error .= "Password must include at least one number! <br/>";
						$Er_password = true;
						$isValid = false;
					}
					if( !preg_match("#[a-z]+#", $password ) ) {
						$error .= "Password must include at least one letter! <br/>";
						$Er_password = true;
						$isValid = false;
						
					} 
					if ( !preg_match("#[A-Z]+#", $password ) ) {
						$error .= "Password must include at least one CAPS! <br/>";
						$Er_password = true;
						$isValid = false;
						
					} 
					if( !preg_match("#\W+#", $password ) ) {
						$error .= "Password must include at least one symbol!<br/>";
						$Er_password = true;
						$isValid = false;
						
					} 
					
				} else {
					$Er_password = true;
					$Er_match = true;
					$isValid = false;
				}
			} else {
				$Er_password = true;
				$isValid = false;
				$Er_match = false;
			}
			
			//Send to Database
			if ($isValid || !$Er_password) {
				
				//Escape the data
				$fname = mysqli_real_escape_string($cnxn, $fname);
				$lname = mysqli_real_escape_string($cnxn, $lname);
				$email = mysqli_real_escape_string($cnxn, $email);
				$password = mysqli_real_escape_string($cnxn, $password);
				
				//Define the query
				 $sql = "INSERT INTO `Register` (fname, lname, email, password)
						VALUES ( '$fname', '$lname', '$email', SHA1('$password'))";
				 $result = @mysqli_query($cnxn, $sql);
				if (!$result) {
					echo "<p>Error: " . mysqli_error($cnxn) . "</p>";
				} else {
					session_start();
						$_SESSION['fname'] = $fname;
						
						
						//redirect
					   header("Location: registered.php");
					exit;
				}
			}
				
				
		}
		
	}
	 
		
	
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    
    <div class="container">
        <div class="page-header">
            <h1>Register</h1>
        </div>



<div class="container">
    <div class="row">
        
		
		   <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                <div class="form-group">
					<?php if ($_POST && $Er_fname) : ?>
					<p class="alert alert-danger">Please enter your first name.</p>
					<?php endif; ?>
					<label for="fname">Enter First Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter First Name" value="<?php echo htmlentities($fname); ?>"  >
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
					<?php if ($_POST && $Er_lname) : ?>
					<p class="alert alert-danger">Please enter your last name.</p>
					<?php endif; ?>
                    <label for="lname">Enter Last Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter Last Name" value="<?php echo htmlentities($lname); ?>"  >
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
					<?php if ($_POST && $Er_email) : ?>
					<p class="alert alert-danger"> Please enter a valid email. </p>
					<?php endif; ?>
                    <label for="email">Enter Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="<?php echo htmlentities($email); ?>"  >
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
					<?php if ($_POST && $Er_password && $Er_match) : ?>
					<p class="alert alert-danger"> Error, please re-enter a password. </p>
					<?php elseif ($_POST && $Er_password && !empty($error)) : ?>
					<p class="alert alert-danger"> <?php echo $error; ?> </p>
					<?php elseif ($_POST && $Er_password) : ?>
					<p class="alert alert-danger"> Please enter a password. </p>
					<?php endif; ?>
                    <label for="password1">Enter Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password1" name="password1" placeholder="Enter Password" >
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password2">Confirm Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm Password" >
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                <input type="submit" name="submit" id="submit" value="Register" class="btn btn-info pull-right">
            </div>
        </form>
        <div class="col-lg-5 col-md-push-1">
            <div class="col-md-12">
				<?php if ($_POST && $isValid) : ?>
                <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span> Success! Message sent.</strong>
                </div>
				<?php elseif ($_POST && !$isValid) : ?>
                <div class="alert alert-danger">
                    <span class="glyphicon glyphicon-remove"></span><strong> Error! Please check all page inputs.</strong>
                </div>
				<?php endif; ?>
            </div>
        </div>
    </div>
</div>



</body>
</html>
