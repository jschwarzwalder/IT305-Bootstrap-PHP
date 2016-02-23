<!DOCTYPE html>

<html>
<head>
    <title>Process HTML Form</title>
    <?php include ("myfunctions5.php"); ?>
    <style>
        .warning {
            color: black;
            text-shadow: red 2px -1px;
            font-size: 1.2em;
        }
    </style>
</head>

<body>
<?php
    /*Array

    [first] => Name
    [year] => 2001
    [ccnum] => 123456789
    
    print "<pre>";
    print_r($_GET);
    print "</pre>";
    
    */
    
    

    if (!empty($_GET['first'])) {
		$firstName = $_GET['first'];
     		print "<p>Hello, $firstname</p>";
    } else {
		print "<p>First name is required.</p>";
    }
    
//    function validName($string)  	{
//		return ctype_alpha($string)
//			AND !empty($string);
//	}

    if (validName($_GET['first'])) {
		$firstName = $_GET['first'];
     		echo "<p>Name: $firstName";
     } else {
        echo "<p class='warning'>First name is required.</p>";
       }   

//    function validYear($string) {
//        //return true if year is not empty and
//        if (!empty($string)){
//            
//            //year is numeric
//            if (is_numeric($string)) {
//                //and consists of four digits
//                if (strlen($string) == 4){
//                    //and is after 1800
//                    if ($string >= 1800) {
//                    return true;
//                    } 
//                }
//            }
//        } else {
//            return false;
//        }
//	}

     	if (validYear($_GET['year'])) {
            //assign the year to a variable
            $year = $_GET['year'];
            //and display it
            echo "<br />Year: $year";
        } else {
            //display an error message
            echo "<p class='warning'>Year is required</p>";
        }

//    function validCreditCard($card_num)  	{
//		//Remove dashes and spaces
//        $card_num = str_replace("-", "", $card_num);
//        $card_num = str_replace(" ", "", $card_num);
//        
//        //credit card number is not blank
//        if (!empty($card_num)) {
//            //credit card is all numeric
//            if (is_numeric($card_num)) {
//                return true;
//            }
//        }	else {
//            return false;
//        }
//	}
//    
    if (validCreditCard($_GET['ccnum'])) {
			$ccnum = $_GET['ccnum'];
            echo "<br />Card Number: $ccnum</p>";
	} else {
			print "<p class='warning'>Credit card number is required.</p>";
    }
   
?>
</body>

</html>
