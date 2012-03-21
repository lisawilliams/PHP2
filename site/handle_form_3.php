<?php
$page_title = "Form Feedback #3";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php print($page_title) ?></title>
</head>
<body>

<?php // Script number 2.5 , handle_form_3.php

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

// Print the submitted information: 
if(!empty($_POST['name']) && !empty($_POST['comments']) && !empty($_POST['email']))

	{
		print "<p>Thank you, {$_POST['name']}, for the following comments: <br />
		<tt>{$_POST['comments']}</tt></p>
		<p>We will reply to you at {$_POST['email']}.</p>\n";
	
	}	else	{
	
		// Missing form value. 
		print '<p>Please go back and fill out the form again.</p>';
	}		

?>

</body>
</html>