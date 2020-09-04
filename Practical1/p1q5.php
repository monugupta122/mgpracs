<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>This is Q5</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		include '../menubar/menu.html';
	?>
<div style="padding-top: 75px;">
	<h1 id="h1">Create a PHP script to print numbers from 1 to 100 using FOR loop</h1>
	<div id="container">
		<div id="box">
		<?php
		for ($i=1; $i <=100 ; $i++) 
		{ 
			echo "$i, ";
		}
		?>
	    </div>
	</div>
</div>
</body>
<footer id="foot">
    - Created by 🅼onu 🅶upt🅰<br>
    (186450307027)
</footer>
</html>