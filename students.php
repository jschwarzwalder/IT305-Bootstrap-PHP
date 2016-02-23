<?php
 /*Jami Schwarzwalder
  *2/14/2016
  *http://jschwarzwalder.greenriver.net/it305/students.php
  */
  
  //Connect to database
  require '../../db.php';

    
   //Define the SELECT query
    $sql = "SELECT * FROM student ORDER BY last";

	//Send the query to the database
    $result = @mysqli_query($cnxn, $sql);

	
	echo '<ul>';
	//Process the rows
    while ($row = mysqli_fetch_assoc($result)) {

        $sid = $row['sid'];
        $first = $row['first'];
        $last = $row['last'];
        $birthdate = $row['birthdate'];
		$gpa = $row['gpa'];
        
		echo  "<li>$sid - $first $last, $birthdate, $gpa</li>";        
	}
	
	echo '</ul>';
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>List of Students</title>
  </head>
  <body>
	<p><a href="new-students.php">Add a new Student</a></p>

 
  </body>
</html>    