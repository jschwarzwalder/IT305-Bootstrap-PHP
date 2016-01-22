<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Sorting Arrays</title>
</head>
<body>
    <?php # Assignment 4
		# Created Jan 17th 2016
        # Created by Jami Schwarzwalder
        /*
            This line is part of the block comment.
            This line is also part of the block comment.
        */
        
        echo "<h1>Comments Example</h1>"; // a header
        // This line comment takes up an entire line.
        # This is another way of creating a line comment.
        /* This is another way of creating 
            a block comment. */
        
        //Variables
        echo "<h1>Variables</h1>";
        $var_float = 12.34;	//floating point
		echo "float is ".$var_float."<br>";
        $var_int = 1234;	//integer
		echo "integer is ".$var_int."<br>";
        $var_string = "1234";//string
		echo "string is ".$var_string."<br>";
        
        //Arithmetic Operators
        echo "<h1>Arithmetic Operators</h1>";
        $num1 = 15;
		echo "num1 is ".$num1."<br>";
        $num2 = 6;
		echo "num2 is ".$num2 ."<br>";
        $divisionResult = $num1 / $num2;
        $modulusResult = $num1 % $num2;
        echo "$num1 divided by $num2 is $divisionResult<br>";
        echo "$num1 modulo $num2 is $modulusResult.";
        
        //Practice
        echo "<hr><h1>Practice Slide</h1>";
        $num = 5;
        echo "<p>num = $num</p>";
        $num++;
        echo "<p>num ++<br />";
        echo "num = $num</p>";
        $num += 2;
        echo "<p>num +=2 <br />";
        echo "num = $num</p>";
        $num--;
        echo "<p>num --<br />";
        echo "num = $num</p>";
        $num *= 3;
        echo "<p>num *= 3<br />";
        echo "num = $num</p>";
        $num -= 5;
        echo "<p>num -= 5<br />";
        echo "num = $num</p>";
        $num /= 2;
        echo "<p>num /= 2<br />";
        echo "num = $num</p>";
        $num %= 3;
        echo "<p>num %= 3<br />";
        echo "num = $num</p>";

        //Build -In Functions
        echo "<h1>Build-In Functions</h1>";
        echo round(1.567, 2).' | Should be 1.57 - round(1.567, 2)<br />';		//1.57
        echo round(1234.876).' | Should be 1235 - round(1234.876)<br />'; 		//1235
        echo number_format(1234.876).' | Should be 1,235 - number_format(1234.876)<br />'; 	//1,235
        echo number_format(1234.876, 2).' | Should be 1,235.88 - number_format(1234.876, 2)<br />';	//1,235.88
        echo gettype(1234.876).' | Should be double - gettype(1234.876) <br />'; 		//double
        echo rand(1, 10).' | Should be a random number between 1 and 10, inclusive - rand(1, 10)<br />';	//a random number between 1 and 10, inclusive
		
		//Practice
		echo "<h1>Practice</h1>";
		print round(3.549, 1) . ' | Should be 3.5 - round(1.567, 2)<br />';
		print number_format(99999.33333) . ' | Should be 99,999 - number_format(99999.33333)<br />';
		print ceil(1.2) . ' | Should be 2 - ceil(1.2)<br />';
		print floor(1.2) . ' | Should be 1 - floor(1.2)<br />';
		print abs(-1.2) . ' | Should be 1.2 - abs(-1.2)<br />';
		
		//Strings
		echo "<h1>Strings</h1>";
		echo "<p>";
		$full = "";	//An empty string
		$first = "Daffy";
		$last = "Duck";
		$full = $first . " " . $last;
		print ("Hello!");
		echo "</p><p>";
		print ("Hi, $full");
		echo "</p><p>";
		$greet = 'I said, "Hello! "';
		print $greet;
		echo "</p><p>";
		$phrase = "You're the bomb.";
		print $phrase;
		echo "</p><p>";
		$destination = "Paris";
		$location = "France";
		$destination = $destination . " is in " 		. $location;
		print $destination;
		echo "</p><p>";
		$destination2 = "Paris ";
		$destination2 .= "is in France";
		print $destination2;
		echo "</p><p>";
		echo 'You\'re the best! - with \\ ';
		echo "</p><p>";
		echo "You're the best! - with '";
		echo "\"Hi!,\" said $name."; 
		echo "</p><p>";
		echo '"Hi!,"' . " said $name."; 
		echo "</p>";
		
		//Practice
		echo "<h1>Practice</h1>";
		echo "<p>";
		echo "Let's go! - with a ' between \"";
		echo "</p><p>";
		echo 'Let\'s go! - with \\ between\' ';
		echo "</p><p>";
		print 'Columbus arrived on 10/12/1492';
		echo "</p>";
		
		//Complex Strings
		echo "<h1>String Syntax</h1>";
		echo "<p>";
		$veg1 = "broccoli";
		$veg2 = "carrot";
		echo "Do you have any $veg1?";
		echo "</p><p>";
		echo "Do you have any {$veg2}s?";
		echo "</p><p>";
		echo "strlen will tell you the number of characters in a string - Howdy! has ". strlen("Howdy!");
		echo "<br />";
		echo "Hi there has ". strlen("Hi there");
		echo "</p><p>";
		echo "str_word_count will tell you the number of words in a string - Have a nice day has ". str_word_count("Have a nice day") ;
		echo "<br />";
		echo "Huh? has ". str_word_count("Huh?") ;
		echo "</p><p>";
		echo "strpos will tell you the position of the first occurrence of one string in another string - strpos(\"Hello\", \"lo\") would return 3 - ". strpos("Hello", "lo");
		echo "<br />";
		echo "strpos(\"Hello\", \"la\") should return false - ". strpos("Hello", "la");
		echo "<br />";
		echo "strpos(\"More cowbell\", \"cow\") should return 5 - ". strpos("More cowbell", "cow");
		echo "</p><p> Substrings- substr() ";
		$email = "president@whitehouse.gov";
		echo "<br />president@whitehouse.gov";
		$name_end = strpos($email, "@");
		echo "<br />strpos(\$email, \"@\")";
		echo "<br />";
		print substr($email, 0, $name_end);
		echo "</p><p> Substrings- str_replace() ";
		$email = "president@whitehouse.gov";
		echo "<br />president@whitehouse.gov";
		$newEmail = str_replace("president", "vice.president", $email);
		echo "<br />replace preseident with vice.president";
		echo "<br />";
		print $newEmail; 
		echo "</p><p>ucfirst - ";
		echo ucfirst("hello world, capitalizes the first letter of a string") ;
		echo "</p><p>ucwords - ";
		echo ucwords("hello world, capitalizes the first letter of each word")  ;
		echo "</p><p> strtoupper -";
		echo strtoupper("hello world, converts a string to upper case") ;
		echo "</p><p>strtolower -";
		echo strtolower("HELLO WORLD, converts a string to lower case") ;
		echo "</p><p> trim -";
		echo trim("removes white space before and after a string") ;
		echo "</p>";

		//Try it
		echo "<h1>TRY</h1>";
		echo "<ol><li>";
		$pharse = ' I like PHP ';
		print trim($pharse);
		echo "</li><li>";
		print strlen($pharse);
		echo "</li><li>";
		print strpos($pharse, 'PHP');
		echo "</li><li>";
		print str_replace("like", "love", $pharse);
		echo "</li><li>";
		print strtoupper($pharse);
		echo "</li></ol>";
		
		//Functions
		echo "<h1>Functions</h1>";
		echo "<p>";
		function printPhrase($phrase) 
		{
		   echo "<p>$phrase</p>";
		}


		printPhrase("Silly cat!");
		echo "</p><p>";
		function greeting($name) {
			print "Hello, $name!";
		}
		
		greeting("Scott");
		echo "</p><p>";
		function average($num1, $num2)
		{
			$avg = ($num1 + $num2)/2;
			return $avg;
		}
		
		$a = 5;
		$b = 3;
		print "The average of $a and $b is " . average($a, $b);
		echo "</p><p>";
		function largest($num1, $num2)
		{
		   if($num1 > $num2)
			return $num1;
		   else
			return $num2;
		}
		
		$a = 5;
		$b = 3;
		print "The largest of $a and $b is " . largest($a, $b);
		echo "</p><p>";
		function circumference($radius)
		{
			$circ = 3.14 * 2 * $radius;
			return $circ;
		}
		
		$radius = 5;
		print "The circumference is " . circumference($radius);
		echo "</p><p>";
		function printPhrase2($phrase = "Quack") 
			{
				echo "<p>$phrase</p>";
			}	
		printPhrase2("Honk");
		printPhrase2();
		echo "</p><p>";
		$globalVar = "Global";
		function scopeExample() {
			global $globalVar;
			echo "<b>Inside function:</b><br>";
			$localVar = "Local";
			echo "$localVar<br>";
			echo $globalVar."<br><br>";
		}
		scopeExample();
		echo "<b>Outside function:</b><br>";	
		echo "$localVar<br>"; 	
		echo "$globalVar<br>";
		echo "</p>";
		
		//Try it
		echo "<h1>TRY IT 2</h1>";
		echo "<p>";
		function reverse_word ($word) {
			$new_word = '';
			for ($i =strlen($word)-1; $i >=0; $i --){
				$new_word .= substr($word, $i, 1);
				print $i . "<br/ >";
				print $new_word . "<br/ >";
			}
		}
		reverse_word('abcdefghi');
		echo "</p>";
    ?>


	</body>
</html>