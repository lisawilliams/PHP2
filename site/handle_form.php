<?php
$page_title = "Form Feedback";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php print($page_title) ?></title>
</head>
<body>

<?php // Script number 2.2 , handle_form.php

// This script takes the input from form.html, places it in variables, and prints out the variables. 

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

// Create variables from the form data: 
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$comments = $_REQUEST['comments'];

// Not used: 
// $_REQUEST['age']
// $_REQUEST['submit']

if (isset($_REQUEST['gender']))
	{
		$gender = $_REQUEST['gender'];
		
	}	else	{	
	
		$gender = NULL;
	}	
		
		
// Print the submitted information:
echo"<p>Thank you, $name, for the following comments: <br />
<tt>$comments</tt><p>
<p>We will reply to you at $email.</p>\n";

// Print a message based on the gender value: 
if ($gender == 'M')
	{
		echo '<p>Good Day, Sir!</p>';
		
	}	elseif ($gender == 'F')
	
		{
		
		echo '<p>Good Day, Madam!</p>';
		
	}	else	{ // No gender selected. 
	
		echo '<p>You forgot to enter your gender!</p>';
	}
		
	
?>

</body>
</html>