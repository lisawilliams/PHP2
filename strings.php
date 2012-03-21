<?php
$page_title = "Predefined Variables";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php print($page_title) ?></title>
</head>
<body>

<?php // Script 1.6 , strings.php

// This script declares strings as variables and then does stuff with them. 

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

// Create the variables: 
$first_name = 'Haruki';
$last_name = 'Murakami';
$book = 'Kafka on the Shore';

// Print the values: 

print "The book $book was written by $first_name $last_name.</p>";


?>

</body>
</html>