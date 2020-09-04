<!DOCTYPE html>
<html>
<head>
	<title>Addition of two numbers</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Practical3/style.css">
</head>
<body>
	<?php
		include '../menubar/menu.html';
	?>
	<div style="padding-top: 70px;">
	<form action="q38.php" method="POST">
		<table id="table">
			<tr>
				<td>Enter number 1 : </td>
				<td><input type="number" name="number1" placeholder="num1"></td>
			</tr>
			<tr>
				<td>Enter number 2 :</td>
				<td><input type="number" name="number2" placeholder="num2"></td>
			</tr>
			<tr><td colspan="2" align="center"><input type="submit" name="ADD" value="ADD"></td></tr>
		<?php
		if (isset($_POST['ADD'])) 
		{
			$num1 = $_POST['number1'];
		   	$num2 = $_POST['number2'];
		   	$sum = $num1 + $num2;
		?>
		   <tr align="center">
		   		<td colspan="2"><?php echo "$num1 + $num2 = $sum"; ?></td>
		   </tr>	
		<?php
			}
		?>
	</table>
	</form>
</div>
</body>
<footer id="foot">- Created by 🅼onu 🅶upt🅰<br>(186450307027)</footer>
</html>