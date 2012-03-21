<?php
$page_title = "";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php print($page_title) ?></title>
</head>
<body>

<?php // Script number 2.9 , calendar_2.php

// This script makes three pull-down menus
// for an HTML form: months, days, years. 

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

// Make the months array:
$months = array(1=> 'January', 'February', 'March', 'April', 'May', 'June', 
'July', 'August', 'September', 'October', 'November', 'December');

// Make the days and years arrays:
$days = range (1, 31);
$years = range (2011, 2021);

// Make the months pull-down menu: 
print '<select name="month">';
foreach ($months as $key => $value)
	{
		print "<option value=\"$key\">$value</option>\n";
	}
	
print '</select>';
		
// Make the days pull-down menu:
print '<select name="day">';
for($day = 1; $day <= 31; $day++)
	{
		echo "<option value=\"$day\">$day</option>\n";
	}
echo '<select>';	

// old dropdown generation code using foreach()
// foreach ($days as $value)
// 	{
// 		print "<option value=\"$value\">$value</option>\n";
// 	}
// 	
// print '</select>';

// Make the years pull-down menu: 
print '<select name="year">';
for($year = 2011; $year <= 2021; $year++)
	{
		print "<option value=\"$year\">$year</option>\n";
	}
print '</select>';	

// Old dropdown generation code using foreach()
// foreach ($years as $value)
// 	{
// 		print "<option value=\"$value\">$value</option>\n";
// 	}
// print '</select>';		
					
?>

</body>
</html>