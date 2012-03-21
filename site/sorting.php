<?php
$page_title = "Sorting Arrays";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php print($page_title) ?></title>
</head>
<body>

<?php // Script number 2.8 , filename sorting.php 
?>

<!-- This script creates an HTML table, fills it with array values, and sorts them -->

<table border ="0" cellspacing ="3" cellpadding="3" align="center">
<tr>
<td><H2>Rating</H2></td>
<td><H2>Title</H2></td>
</tr>

<?php

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

// Create the array: 
$movies = array(
'My Dinner With Andre' => 10, 
'Moonstruck' => 9, 
'Dogma' => 8, 
'Pulp Fiction' => 9, 
'Jackie Brown' => 7, 
'Ocean\'s Eleven' => 6
);

// Display the movies in their original order: 

print '<tr><td colspan="2">In their original order:</td></tr>';
foreach ($movies as $title => $rating) 
	{
		print "<tr><td>$rating</td><td>$title</td></tr>\n";
	}	
	
// Display the movies sorted by title: 
ksort($movies);
print '<tr><td colspan="2">Sorted by title</td></tr>';
foreach ($movies as $title => $rating) 
	{
		print "<tr><td>$rating</td><td>$title</td></tr>\n";
	}	

// Display the movies sorted by rating: 
arsort($movies);
print '<tr><td colspan="2">Sorted by rating
</td></tr>';
foreach ($movies as $title => $rating) 
	{
		print "<tr><td>$rating</td><td>$title</td></tr>\n";
	}	
		
?>

</body>
</html>