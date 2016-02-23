<!DOCTYPE html>

<html>
<head>
    <title>Process HTML Form</title>
</head>

<body>
<?php
    print "<pre>";
    print_r($_GET);
    print "</pre>";
    
    $firstName = $_GET['first'];
    print "<p>Hello, $firstname</p>";
?>
</body>

</html>
