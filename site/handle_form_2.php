<?php
$page_title = "Form Feedback";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php print($page_title) ?></title>
	<style type = "text/css" title ="text/css" media ="all">
		.error {
			font-weight: bold;
			color: #C00;
				}
	</style>			
</head>
<body>

<?php // Script number 2.4 , handle_form_2.php

// Remember to change the form handler in form.html. 

// This script takes the input from form.html, places it in variables, and prints out the variables. 

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

// Create a shorthand for the form data: 
// $name = $_REQUEST['name'];
// $email = $_REQUEST['email'];
// $comments = $_REQUEST['comments'];

// Validate the name: 
if (!empty($_REQUEST['name']))
	{
		$name = $_REQUEST['name'];
		
	}	else	{
	
		$name = NULL;
		echo '<p class="error">You forgot to enter your name!</p>';
	}

// Validate the email: 
if (!empty($_REQUEST['email']))
	{
		$email = $_REQUEST['email'];
		
	}	else	{				
		$email = NULL;
		echo '<p class="error">You forgot to enter your email!</p>';
	}
	
// Validate the comments: 
if (!empty($_REQUEST['comments']))
	{
		$comments = $_REQUEST['comments'];
		
	}	else	{				
		$comments = NULL;
		echo '<p class="error">You forgot to enter your comments!</p>';
	}	
	
// Validate the gender: 

if (isset($_REQUEST['gender']))
	{
		$gender = $_REQUEST['gender'];
		
		if ($gender == 'M')
		
			{
				echo '<p>Good day, Sir!</p>';
				
			}	elseif ($gender == 'F')	
			
				{
					echo '<p>Good Day, Madam!</p>';
			}	else	{
			
				// Unacceptable value. 
				$gender = NULL;
				echo '<p class = "error">You did not enter a gender.</p>';
			}

// If everything is okay, print the message: 

if ($name && $email && $gender && $comments) 

	{
		print "<p>Thank you, $name. for the following comments: <br /><tt>$comments</tt></p><p>We will reply to you at $email</p>\n";
		
	}	else	{
	
		// Missing form value. 
		print '<p class ="error">Please go back and fill out the form again.</p>';		
	}
}  // This isn't in the book, but the script doesn't work without it. 
		
?>

</body>
</html>