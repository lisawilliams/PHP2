<?php
$page_title = "Constants";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php print($page_title) ?></title>
</head>
<body>

<?php // Script 1.9 , constants.php

// This script demonstrates some number-related PHP functions. 

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

// Set today's data as a constant: 
define ('TODAY', 'March 16, 2011');

// Print a message using predefined constants and the TODAY constant: 
print '<p>Today is ' . TODAY . '.<br />
This server is running version <b>' . PHP_VERSION . '</b> of PHP on the <b>' . PHP_OS .
'</b> operating system.</p>';

?>

</body>
</html>