<?php 
require('index.php');
$i=$_GET['post_id'];
//Function to display an element
function displayElement($element, $i) { ?>
	<?php
		//Changed the element displays to h1
		echo '<h1>'.$element[$i]['title'].'</h1>';
		echo '<p>'.$element[$i]['content'].'</p>';	
		echo '<h3>'.$element[$i]['author'].'</p>';               
		echo '<h3>'.$element[$i]['date'].'</p>';
	?>
<?php } ?>
<?php
displayElement($blogPost, $i);
