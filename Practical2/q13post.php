<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array Merge Post</title>
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
					$sArr1=explode(",", $_POST['text1']);
					echo "Array 1"; 
				?>
			</td>
			<td>
				<?php 
					for ($i=0; $i < count($sArr1) ; $i++) 
					{ 
						echo "$sArr1[$i]</br>";
					}
				 ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php 
					$sArr2=explode(",", $_POST['text2']);
					echo "Array 2"; 
				?>
			</td>
			<td>
				<?php 
					for ($i=0; $i < count($sArr2) ; $i++) 
					{ 
						echo "$sArr2[$i]</br>";
					}
				 ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php
					echo "Array 3 after merging Array 1 and Array 2";
				?>
			</td>
			<td>
				<?php
					for ($i=0; $i < count($sArr1) ; $i++) 
					{ 
						$sArr3[]=$sArr1[$i];
					}
					for ($i=0; $i < count($sArr2) ; $i++) 
					{ 
						$sArr3[]=$sArr2[$i];
					}
					for ($i=0; $i < count($sArr3) ; $i++) 
					{ 
						echo "$sArr3[$i]</br>";
					}
					//print_r($sArr3);
				?>
			</td>
		</tr>
		<tr>
			<td>
				<?php
					echo "Maximum from Array 3";
				?>
			</td>
			<td>
				<?php
					$max=$sArr3[0];
					for ($i=1; $i <count($sArr3); $i++) 
					{ 
						if ($sArr3[$i]>$max) 
						{
							$max=$sArr3[$i];
						}
					}
					echo "$max";
				?>
			</td>
		</tr>
		<tr>
			<td>
				<?php
					echo "Minimum from Array 3";
				?>
			</td>
			<td>
				<?php
					$min=$sArr3[0];
					for ($i=1; $i <count($sArr3); $i++) 
					{ 
						if ($sArr3[$i]<$min) 
						{
							$min=$sArr3[$i];
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