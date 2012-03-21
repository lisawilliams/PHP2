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

<?php // Script 1.10 , quotation_marks.php

// This script calculates a total and prints out the results using different quotation marks.  

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

// Set the variables: 
$quantity = 30;
$price = 119.95;
$taxrate = .05;

// Calculate the total. 
$total = $quantity * $price;
$total = $total + ($total * $taxrate); 

// Format the total 
$total = number_format($total, 2);

// Print the results using double quotation marks:  

print "<h3>Using double quotation marks:</h3>";
print "<p>You are purchasing $quantity widgets at a cost of $$price each. With tax, 
the total comes to $$total.</p>\n";

// Print the results using single quotation marks: 
print '<h3>Using single quotation marks:</h3>';
print '<p>You are purchasing $quantity widgets at a cost of $$price each. With tax, 
the total comes to $$total.</p>';

phpinfo();

?>
</body>
</html>