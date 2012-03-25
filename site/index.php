<?php
$page_title = "Current Orders";
include('includes/header.html');
?>

<?php // Script number 3.4 , filename index.php

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 	

?>
<br />
<br />
<p></p>
<H3>Current Orders</H3>

<?php
function create_ad()
	{
		echo '<p class="ad">This is an annoying ad!</p>';
	} 
// End of the function definition. 
?>


<p>This is where the page specific content goes.  This section, 
and the corresponding header, will change from one page to the next. 
Here's a little change. </p>
<?php 
create_ad();
?>

<p>Filler text. Now then, thought I, unconsciously rolling up the sleeves of my frock, here goes for a cool, collected dive at death and destruction, and the devil fetch the hindmost.</p>
<p>"Who would have thought it, Flask!" cried Stubb; "if I had but one leg you would not catch me in a boat, unless maybe to stop the plug-hole with my timber toe. Oh! he's a wonderful old man!"</p>
<p>"I don't think it so strange, after all, on that account," said Flask. "If his leg were off at the hip, now, it would be a different thing. That would disable him; but he has one knee, and good part of the other left, you know."</p>
<p>"I don't know that, my little man; I never yet saw him kneel."</p>
<p>Among whale-wise people it has often been argued whether, considering the paramount importance of his life to the success of the voyage, it is right for a whaling captain to jeopardize that life in the active perils of the chase. So Tamerlane's soldiers often argued with tears in their eyes, whether that invaluable life of his ought to be carried into the thickest of the fight.</p>		

<?php
// Call the function again: 
create_ad();
?>

<?php
include('includes/footer.html')
?>

</body>
</html>