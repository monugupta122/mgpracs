<!DOCTYPE html>
<html>
<head>
	<title>Finding prime numbers</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Practical3/style.css">
</head>
<body>
	<?php
		include '../menubar/menu.html';
	?>
	<div style="padding-top: 70px;">
	<form action="q36post.php" method="post">
		<table id="table">
			<tr align="center">
				<th colspan="3">Search Prev Or Next Prime Numbers</th>
			</tr>
			<tr>
				<th>Sr</th>
				<th>Enter Number</th>
				<th>Searching Direction</th>
			</tr>
			<tr>
				<td>1</td>
				<td><input type="number" name="number" min="2" value="45"></td>
				<td>
					<input type="radio" name="direction" value="F">Forward</input>
					<input type="radio" name="direction" value="R">Reverse</input>
				</td>
			</tr>
			<tr align="center">
				<td colspan="3"><input type="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</div>
</body>
<footer id="foot">- Created by 🅼onu 🅶upt🅰<br>(186450307027)</footer>
</html>