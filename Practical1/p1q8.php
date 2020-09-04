<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>This is Q8</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		include '../menubar/menu.html';
	?>
<div style="padding-top: 75px;">
	<h1 id="h1">Create a PHP application which will accept two integer numbers through text boxes on one page and display result of addition on second page</h1>
	<div id="container">
		<div id="box">
		<form action="page2.php" method="POST">
			<center>
				<input type="number" name="number1" placeholder="num1">
				<br>
				<input type="number" name="number2" placeholder="num2">
				<br>
				<input type="submit" name="ADD" value="ADD">
				<br>
			</center>
		</form>
		</div>
	</div>
	</div>		
</body>
<footer id="foot">
    - Created by 🅼onu 🅶upt🅰<br>
    (186450307027)
</footer>
</html>