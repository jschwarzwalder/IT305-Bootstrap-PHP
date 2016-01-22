<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
        <title>Constants</title>
    </head>
    <body>
        <?php
        # Script 1.9 - constants.php 
        # Created Jan 17th 2016
        # Created by Jami Schwarzwalder
       
        // Set today's date as a constant:
       define ('TODAY', 'January 17, 2016');
        
        //Print a message, using predefined constants and the TODAY constant:
        echo '<p>Today is ' . TODAY . '.<br /> 
        This server is running version <b>' .
        PHP_VERSION .'</b> of PHP on the <b>' .
        PHP_OS . '</b> operationg system.</p>';
       
        
        // End of PHP code.
        ?>
    </body>
</html>