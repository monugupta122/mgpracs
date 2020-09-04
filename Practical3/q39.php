<!DOCTYPE html>
<html>
<head>
	<title>Mathematical Operations</title>
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
	<form action="q39.php" method="POST">
		<tr>
			<td>Enter number 1 :</td>
			<td><input type="number" name="number1" placeholder="num1"></td>
		</tr>
		<tr>
			<td>Enter number 2 :</td>
			<td><input type="number" name="number2" placeholder="num2"></td>
		</tr>
		<tr>
			<td>Select operation : </td>
			<td>
				<select name="op">
					<option value="+">Addition</option>
					<option value="-">Subtraction</option>
					<option value="*">Multiplication</option>
					<option value="/">Division</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Select round status : </td>
			<td>
				<input type="radio" name="roundstatus" value="y">Round On</input>
				<input type="radio" name="roundstatus" value="n" checked>Round Off</input>
			</td>
		</tr>
		<tr align="center">
			<td colspan="2">
				<input type="submit" name="submit" value="Submit">
			</td>
		</tr>
	</form>
	<?php
		if (isset($_POST['submit'])) {
			$num1 = $_POST['number1'];
		    $num2 = $_POST['number2'];
		    $choice = $_POST['op'];
		    $roundstatus=$_POST['roundstatus'];
	?>
		<tr align="center">
			<td colspan="2">
	<?php
			echo "Number1 = ".$num1."<br>";
		    echo "Number2 = ".$num2."<br>";
		    switch ($choice) 
		    {
		        case '+':
		        	$sum = $num1 + $num2;
		        	echo "$num1 + $num2 = $sum";
		        	break;
		        case '-':
		          	$sum = $num1 - $num2;
		          	echo "$num1 - $num2 = $sum";
		          	break;
		        case '*':
		         	$sum = $num1 * $num2;
		          	echo "$num1 * $num2 = $sum";
		          	break;
		        case '/':
		          	$sum = $num1 / $num2;
		          	if ($roundstatus=='y')
		          	{
		            	$sum = round($sum);
		            	echo "$num1 / $num2 = $sum";
		          	}
		          	else
		          	{
		            	echo "$num1 / $num2 = $sum";
		          	}
		          	break;
		        default:
		          	echo "No Choice";
		        break;
      		}
		}
	?>
			</td>
		</tr>
	</table>
</div>
</body>
<footer id="foot">- Created by 🅼onu 🅶upt🅰<br>(186450307027)</footer>
</html>