<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>This is Q2</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		include '../menubar/menu.html';
	?>
<div style="padding-top: 75px;">
<h1 id="h1">Design webpage using different GUI objects, such as textbox, selection box, radio button</h1>
<div id="container">
<div id="box">
	<center>
	<form action="page1.php" method="POST">
		<h2>Textbox</h2>
		<input type="text" name="txt" placeholder="Your Name"><br><br>
		<h2>Selection box, Radio button</h2>
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
		<br><br>
		<input type="radio" name="roundstatus" value="y">Round On</input>
		<input type="radio" name="roundstatus" value="n" checked>Round Off</input>
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