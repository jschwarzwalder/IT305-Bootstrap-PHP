<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>PHP Security example 2</title>
    <meta name="author" content="Rob Tuley" />
    <meta name="description" content="An example of a spoofing a form to corrupt table data." />
    <meta name="keywords" content="MYSQL, php, spoof form, hoe19, p1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>

<!-- greeting -->
<p><strong>This example illustrates how a spoofed form can corrupt table data. Always check
everything!</strong></p>

<p>A PHP developer has built a simple mailing list storage system. The table below displays all the current members on the mailing list from a file. The person's name can be up to 30 characters long, the email up to 30 characters and must be valid, and user selects either Text or HTML as the desired format for emails.</p>

<!-- table of mailing list members -->

<!-- form to enter data for mailing list -->
<form action="http://tina.greenrivertech.net/305/security/example2.php"
      method="post">

<label for="name_id">Username:</label>
<input type="text"
       name="name"
       size="30"
       maxlength="300"
       value=""
       id="name_id" />
<br />

<label for="email_id">Email:</label>
<input type="text"
       name="email"
       size="30"
       maxlength="30"
       value=""
       id="name_id" />
<br />

Format desired:<br />
<input type="text"  name="format" id="text_id" value="text" />
<label for="text_id">???</label>
<br />

<input type="submit" 
       value="Submit" />

</form>
<p><strong>Without looking at the PHP source, try to get some corrupt data in the mailing list file. HINT: form spoofing will probably be required!! What has the developer forgotten?</strong></p>

</body>
</html>