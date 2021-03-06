<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Sorting Arrays</title>
	<style>
		table {
			color: white;
			padding: 1%;
			border: groove 2px;
		}
		td {
			padding: 5px;
			border: groove 2px;
			text-align: center;
		}
	</style>
	
    </head>
<body>
	<table align="center" bgcolor="blue" > 
	<?php # Script 2.8 - sorting.php
		# Created Jan 17th 2016
        # Created by Jami Schwarzwalder
        
		
		// Create the array:
		$movies = array (
			'Casablanca' => 10,
			'To Kill a Mockingbird' => 10,
			'The English Patient' => 2,
			'Stranger Than Fiction' => 9,
			'Story of the Weeping Camel' => 5,
			'Donnie Darko' => 7
		);
		
		// Display the movies in their original order:
		echo '<tr><td colspan="2"><b>In their original order:</b></td></tr>';
		foreach ($movies as $title => $rating) {
			echo "<tr><td>$rating</td>
			<td>$title</td></tr>\n";
		}
		
		// Display the movies sorted by title:
		echo '</table><h3 style="text-align: center">This is a k sort which will sort keys</h3><table align="center" bgcolor="purple" >';
		ksort($movies);
		echo '<tr><td colspan="2"><b>Sorted by title:</b></td></tr>';
		foreach ($movies as $title => $rating) {
			echo "<tr><td>$rating</td>
			<td>$title</td></tr>\n";
		}
		
		// Display the movies sorted by rating:
		echo '</table><h3 style="text-align: center">This is a a r sort which will sort values while not resetting keys.<br /> r means it will be reversed</h3><table align="center" bgcolor="green" >';
		arsort($movies);
		echo '<tr><td colspan="2"><b>Sorted by rating:</b></td></tr>';
		foreach ($movies as $title => $rating) {
			echo "<tr><td>$rating</td>
			<td>$title</td></tr>\n";
		}
		
		?>
	</table>

	</body>
</html>