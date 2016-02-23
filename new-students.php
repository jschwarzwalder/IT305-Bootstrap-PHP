<?php
	/*Jami Schwarzwalder
	*2/14/2016
	*http://jschwarzwalder.greenriver.net/it305/new-students.php
	*Form to add new students to database
	*/
  
     //Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
  
	//Connect to database
	require '../../db.php';
?>  
<!DOCTYPE html>

<html>
<head>
    <title>New Students</title>
</head>

<body>
	<?php
	$sid="";
	$fname="";
	$lname="";
	$gpa="";
       
    //Form has been submitted 
    if (isset($_POST['submit'])) {
		

	 $isValid = true;

 	 //Validate first name
        if (!empty($_POST['fname'])) {
            $fname = $_POST['fname'];
        } else {
            echo '<p>Please enter a first name.</p>';
            $isValid = false;
			$fname="";
	    }

	 //Validate last name
        
		if (!empty($_POST['lname'])) {
            $lname = $_POST['lname'];
        } else {
            echo '<p>Please enter a last name.</p>';
            $isValid = false;
        }
		
	//Validate SID
        
		if (!empty($_POST['sid'])) {
            $sid = $_POST['sid'];
        } else {
            echo '<p> Please enter a Student ID Number. </p>';
            $isValid = false;
        }
		
		//Validate GPA
        
		if (!empty($_POST['gpa'])) {
            $gpa = $_POST['gpa'];
			if ($gpa > 4.0 || $gpa < 0.0){
				 echo '<p> Please enter a valid GPA. </p>';
				$isValid = false;
			}
        } else {
            echo '<p> Please enter a GPA. </p>';
            $isValid = false;
        }
		
		//Send to Database
		if ($isValid) {
            
            //Escape the data
            $fname = mysqli_real_escape_string($cnxn, $fname);
            $lname = mysqli_real_escape_string($cnxn, $lname);
            $sid = mysqli_real_escape_string($cnxn, $sid);
			$gpa = mysqli_real_escape_string($cnxn, $gpa);
            
            //Define the query
			 $sql = "INSERT INTO student (sid, first, last, gpa)
                    VALUES ('$sid', '$fname', '$lname', '$gpa')";
			 $result = @mysqli_query($cnxn, $sql);
            if (!$result) {
                echo "<p>Error: " . mysqli_error($cnxn) . "</p>";
            }
            
			 //Display summary
            echo "<h3>New student added!</h3>";
            echo "<p>SID: $sid</p>";
            echo "<p>Name: $fname $lname</p>";
			echo "<p>GPA: $gpa</p>";
			echo '<p><a href="students.php">See results</a></p>';
            return;
        }
		
	}
?>

   <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
	<label for="sid">SID: 
		<input type="text" name="sid" size="20" value="<?php echo $sid; ?>">
   </label><br>
        
	<label for="fname">First Name:
		<input type="text" name="fname" size="20" value="<?php echo $fname; ?>"  >
	</label><br>
        
	<label for="lname">Last Name:
		<input type="text" name="lname" size="20" value="<?php echo $lname; ?>" >
	</label><br>
	
	<label for="gpa">GPA: 
		<input type="number" step="0.1" name="gpa" size="20" min="0" max="4" value="<?php echo $gpa; ?>">
   </label><br><br>
        
	<input type="submit" value="Validate" name="submit">
   </form>
   
</body>

</html>
