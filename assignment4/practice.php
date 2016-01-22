<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Assignment 4b</title>
</head>
<body>
	<h1>Try it #1</h1>
	<h3>Grades</h3>
    <?php # Assignment 4
		# Created Jan 19th 2016
        # Created by Jami Schwarzwalder
        
		$grade = 86.7;
		if($grade >= 90){
				echo "<p> A - with " . $grade . "%</p>";
		} elseif ($grade >= 80){
				echo "<p> B - with " . $grade . "%</p>";
		} elseif ($grade >= 70){
				echo "<p> C - with " . $grade . "%</p>";
		} elseif ($grade >= 60){
				echo "<p> D - with " . $grade . "%</p>";
		} else {
				echo "<p> F - with " . $grade . "%</p>";
		}
               
    ?>
	
	<h1>Try it #2</h1>
	<h3>Names Array</h3>
	<?php
		$people = array("Marissa Meyer", "Cory Doctorow", "Scott Westerfeld", "Gabrielle Zevin", "Gail Carson Levine", "G. Willow Wilson", "Gayle Forman", "Noelle Stevenson", "Holly Black", "Gene Luen Yang");
		print "<pre>";
		print_r($people);
		print "</pre>";
		echo "<p>First in my list - " . $people[0] . "</p>";
		echo "<p>Last in my list - " . $people[sizeof($people) -1] . "</p>";
		echo "<p> A For loop <ol>";
		for ($i=0; $i<sizeof($people); $i++){
			echo "<li>" . $people[$i] . "</li>";
		}
		sort($people);
		echo "</ol><p> A Foreach loop <ul>";
		foreach ($people as $name){
			echo "<li>" . $name . "</li>";
		}
		echo "</ul>";
	?>
	<h1>Try it #3</h1>
	<h3>Class Grades</h3>
	<?php
		$classes = array("Database Fundamentals" => 96.0,
		 "Linux Administration I" => 94.0,
		 "Introduction to Interactive Programming in Python" => 99.0,
		 "Algorithmic Thinking" => 91.0,
		 "Principles of Computing" => 90.3,
		 "Human Computer Interaction" => 100.0,
		 "Fantasy and Science Fiction: The Human Mind, Our Modern World" => 80.0,
		 "Learn to Program: The Fundamentals" => 94.9,
		 "Think Again: How to Reason and Argue" => 83.5,
		"Gamification" => 78.5);
		
		foreach ($classes as $class => $grade){
			echo "<p>I took " . $class . " and I earned a " . $grade . "% </p>"	;		
		}
		?>
	</body>
</html>