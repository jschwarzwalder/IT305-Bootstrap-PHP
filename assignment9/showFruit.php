<?php

?>
<!DOCTYPE html>

<html>
<head>
    <title>Show Fruit</title>
</head>

<body>
<?php
  if (isset($_COOKIE["fruit"]) && isset($_COOKIE["name"]))
      echo $_COOKIE["name"]. "'s favorite fruit is " . 	$_COOKIE["fruit"];
  else
      echo "I dunno your favorite fruit.";
?>

<p><a href="storeFruit.html">Enter again</a></p>



</body>
</html>
