<!DOCTYPE html>
<html>
<head>
	<title>Age Calc</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Practical3/style.css">
</head>
<body>
	<?php
		include '../menubar/menu.html';
	?>
	<div style="padding-top: 70px;">
	<table id="table">
		<form action="q33post.php" method="post">
			<tr>
				<td>Enter your name: </td>
				<td><input type="text" name="name" placeholder="Your Name" required="required"></td>
			</tr>
			<tr>
				<td>Enter your date of birth:</td>
				<td><input type="date" name="birthdate"></td>
			</tr>
			<tr style="text-align: center;">
				<td colspan="2"><input type="submit" name="submit" value="Calculate"></td>
			</tr>
		</form>
	</table>
</div>
</body>
<footer id="foot">- Created by 🅼onu 🅶upt🅰<br>(186450307027)</footer>
</html>