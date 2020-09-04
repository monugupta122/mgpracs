<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>This is Q4</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		include '../menubar/menu.html';
	?>
<div style="padding-top: 75px;">
	<h1 id="h1">Create a PHP script to check whether number is odd or even</h1>
	<div id="container">
	<div id="box">
	<form action="p1q4.php" method="POST">
	<center>
		<input type="number" name="number1" placeholder="number">
		<br>
		<input type="submit" name="check" value="Check">
		<br><br>
<?php
	if (isset($_POST['check'])) 
	{
		$num1 = $_POST['number1'];
		if ($num1 % 2==0) 
		{
			echo "$num1 is Even";
		}
		else
		{
			echo "$num1 is Odd";
		}
	}
?>
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