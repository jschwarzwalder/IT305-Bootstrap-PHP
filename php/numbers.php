<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
        <title>Numbers</title>
    </head>
    <body>
        <?php
        # Script 1.8 - numbers.php 
        # Created Jan 16th 2016
        # Created by Jami Schwarzwalder
       
        // Create the variables:
        $quantity = 3; //Buying 30 widgets
        $price = 119.95;
        $taxrate = .05; // 5% sales tax
        
        //Calculate the total:
        $total = $quantity * $price;
        $total = $total + ($total * $taxrate);
        
        //Format the total:
        $total = number_format ($total, 2);
        
        
        echo '<p>You are purchasing <b>' . $quantity . '</b> widget(s) at a cost of <b>$' . $price . '</b> each.
        With tax, the total comes to <b>$' . $total . '</b>.</p>';
        
     
        // End of PHP code.
        ?>
    </body>
</html>