<?php
$page_title = "Trip Cost Calculator";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php print($page_title) ?></title>
	<link rel ="stylesheet" href="includes/style.css" type="text.css" media="screen" />
</head>
<body>

<?php // Script number 3.5 , filename calculator.php

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

// Include the header: 
include('includes/header.html');

// Check for form submission: 
if ($_SERVER['REQUEST_METHOD'] == 'POST')

{
		// Minimal form validation: 
		if (isset($_POST['distance'], $_POST['gallon_price'], $_POST['efficiency']))
	
	// This part of the validation just wouldn't work, not sure why. 
	// If you put it back in, you have to take off one of the parentheses at the
	// end of line 28 and put it at the end after $_POST['efficiency'] .
	//	&& is_numeric($_POST['distance']) 
	//	&& is_numeric($_POST['gallon_price'])
	//	&& is_numeric($_POST['efficiency']))
		{
		
		
				// if the form data validates, calculate the results:
				$gallons = $_POST['distance'] / $_POST['efficiency'];
				$dollars = $gallons * $_POST['gallon_price'];
				$hours = $_POST['distance']/65;
				
				// Print the results:
				print '<h1>Total Estimated Cost</h1>
				<p>The total cost of driving '.$_POST['distance'] .' miles, 
				averaging ' . $_POST['efficiency'] .' miles per gallon, 
				and paying an average of $' . $_POST['gallon_price'] .
				' per gallon, is $' . number_format($dollars, 2) .'. If you 
				drive at an average of 65 miles per hour, the trip will
				take approximately ' . number_format($hours, 2) .'hours.</p>';
				
			}	else	{
			
				print '<p class = "error">Please enter a valid distance, 
				price per gallon, and fuel efficiency.</p>';
				
			}					
} // End of main submission IF. 

// Leave PHP and create the HTML form: 
?>

<H1>Trip Cost Calculator</h1>
<form action ="calculator.php" method="post">
<p>Distance (in miles): <input type="text" name="distance" /></p>
<p>Avg. price per gallon: <span class="input">
<input type = "radio" name="gallon_price" value="$3.00" /> 3.00
<input type = "radio" name="gallon_price" value="$3.50" /> 3.50
<input type = "radio" name="gallon_price" value="$4.00" /> 4.00
</span></p>

<p>Fuel efficiency:<select name="efficiency">
<option value="10">Terrible</option>
<option value="20">Decent</option>
<option value="30">Good</option>
<option value="50">Outstanding</option>
</select></p>

<p><input type="submit" name="submit" value="Calculate" /></p>
</form>

<?php include('includes/footer.html'); ?>




</body>
</html>