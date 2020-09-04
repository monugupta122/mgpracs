<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>This is Q6</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		include '../menubar/menu.html';
	?>
<div style="padding-top: 75px;">
	<h1 id="h1">Create a PHP script to print numbers from 1 to 50 using WHILE loop</h1>
	<div id="container">
		<div id="box">
		<?php
			$i=1;
			while ($i<=50) 
			{
				echo "$i, ";
				$i++;
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