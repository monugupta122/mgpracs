<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>This is Q9</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		include '../menubar/menu.html';
	?>
<div style="padding-top: 75px;">
	<h1 id="h1">Create a PHP application which will accept two integer numbers through text boxes and choice of operation (add, sub, mul, div) through selection box on one page and display result of operation on second page</h1>
	<div id="container">
	<div id="box">
	<center>
	<form action="page3.php" method="POST">
			<input type="number" name="number1" placeholder="num1">
			<br>
			<input type="number" name="number2" placeholder="num2">
			<br>
			<select name="op">
				<option value="+">ADD</option>
				<option value="-">SUB</option>
				<option value="*">MUL</option>
				<option value="/">DIV</option>
			</select>
			<br>
			<input type="submit" name="submit" value="Submit">
			<br>
	</form>
</center>
</div>
</div>
</div>
</body>
<footer id="foot">
    - Created by 🅼onu 🅶upt🅰<br>
    (186450307027)
</footer>
</html>