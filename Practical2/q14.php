<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cubes And Squares</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		include '../menubar/menu.html';
	?>
	<div style="padding-top: 70px;">
	<table id="table">
		<tr>
			<td>Numbers that have there squares and cubes less than 500 and 1000 respectively</td>
			<td>
				<?php
					$i=1;
					while ($i*$i<=500 && $i*$i*$i<=1000)
					{
						echo "$i</br>";
						$i++;
					}
				?>
			</td>
		</tr>
	</table>
</div>
</body>
<footer id="foot">- Created by 🅼onu 🅶upt🅰<br>(186450307027)</footer>
</html>