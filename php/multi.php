<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Multidensional Arrays</title>
	
    </head>
<body>
	<p>Some North American States, Provinces, and Territories:</p>
	<?php # Script 2.7 - multi.php
		# Created Jan 17th 2016
        # Created by Jami Schwarzwalder
        
		// Create one array:
		$mexico = array(
			 
			'BC' => 'Baja California',
			'OA' => 'Oaxaca',
			'YU' => 'Yucatan'
		);
		
		// Create another array:
		$us = array (
			
			'IL' => 'Illinois',
			'IN' => 'Indiana',
			'IA' => 'Iowa',
			'MD' => 'Maryland',
			'PA' => 'Pennsylvania',
			'WA' => 'Washington'
		);
		
		// Create a third array:
		$canada = array (
			
			'AB' => 'Alberta',
			'NT' => 'Northwest Territories',
			'PE' => 'Prince Edward Island',
			'QC' => 'Quebec',
			'YT' => 'Yukon'
		);
		
		// Combine the arrays:
		$n_america = array(
			'Canada' => $canada,
			'Mexico' => $mexico,
			'United States' => $us
			
		);
		
		// Loop through the countries:
			foreach ($n_america as $country => $list) {
			
				// Print a heading:
				echo "<h2>$country</h2><ul>";
				
				// Print each state, province, or territory:
				foreach ($list as $key => $value) {
					echo "<li>$key - $value</li>\n";
				}
				
				// Close the list:
				echo '</ul>';
		
		} // End of main FOREACH.
	
	?>
</body>
</html>