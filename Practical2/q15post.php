<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array with string elements</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		include '../menubar/menu.html';
	?>
	<div style="padding-top: 70px;">
	<table id="table">
		<tr>
			<td>
				<?php 
					$cArr=explode(",", $_POST['text1']);
					echo "Array with string elements"; 
				?>
			</td>
			<td>
				<?php 
					for ($i=0; $i < count($cArr) ; $i++) 
					{ 
						echo "$cArr[$i]</br>";
					}
				 ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php 
					echo "Element having largest length"; 
				?>
			</td>
			<td>
				<?php
					$max=$cArr[0];
					for ($i=1; $i <count($cArr); $i++) 
					{ 
						if (strlen($cArr[$i])>strlen($max)) 
						{
							$max=$cArr[$i];
						}
					}
					echo "$max";
				?>
			</td>
		</tr>
		<tr>
			<td>
				<?php 
					echo "Element having smallest length"; 
				?>
			</td>
			<td>
				<?php
					$min=$cArr[0];
					for ($i=1; $i < count($cArr); $i++) 
					{ 
						if (strlen($cArr[$i])<strlen($min)) 
						{
							$min=$cArr[$i];
						}
					}
					echo "$min";
				?>
			</td>
		</tr>
	</table>
</div>
</body>
<footer id="foot">- Created by 🅼onu 🅶upt🅰<br>(186450307027)</footer>
</html>