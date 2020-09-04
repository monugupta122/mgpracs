<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>This is Q7</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		include '../menubar/menu.html';
	?>
<div style="padding-top: 75px;">
	<h1 id="h1">Create a PHP script to illustrate use of switch statement</h1>
	<div id="container">
		<div id="box">
			<center>
			<form action="p1q7.php" method="POST">
			<select name="col">
				<option value="voilet">Voilet</option>
				<option value="indigo">Indigo</option>
				<option value="blue">Blue</option>
				<option value="green">Green</option>
				<option value="yellow">Yellow</option>
				<option value="orange">Orange</option>
				<option value="red">Red</option>
			</select>
			<br>
			<input type="submit" name="Go" value="Go">
		    <br><br>
			</form>
		<?php
			if (isset($_POST['Go'])) 
			{
			$color = $_POST['col'];
			switch ($color) 
			{
				case 'voilet':
					echo "Your favourite color is $color";
					break;
				case 'indigo':
					echo "Your favourite color is $color";
					break;
				case 'blue':
					echo "Your favourite color is $color";
					break;
				case 'green':
					echo "Your favourite color is $color";
					break;
				case 'yellow':
					echo "Your favourite color is $color";
					break;
				case 'orange':
					echo "Your favourite color is $color";
					break;
				case 'red':
					echo "Your favourite color is $color";
					break;
				default:
					echo"No choice";
					break;
			}
		}
		?>
	    </div>
</div>
</center>
</div>
</body>
<footer id="foot">
    - Created by 🅼onu 🅶upt🅰<br>
    (186450307027)
</footer>
</html>