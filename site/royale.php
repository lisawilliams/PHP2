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

<?php // Script number , filename

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

$country = $_POST['country'];

if ($_POST ['country'] == 'France')
	{
		$burgername = 'Royale With Cheese';
	}
	
print "In $country they call it a $burgername."

?>

<p><form action ="" method ="post">
What country?<input type = "text" name ="country" value="country" size ="30">
</form></p>


</body>
</html>