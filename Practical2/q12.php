<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sorting of Array</title>
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
					$sArr=array('195','2','565','774','602','670','30','873','404','892','59');
					echo "Array before Sorting: </br>";
					//print_r($sArr);
					for ($i=0; $i < count($sArr); $i++)
					{ 
						echo "$sArr[$i]</br>";
					}
				?>
			</td>
			<td>
				<?php
					if (isset($_POST['Sort']))
					{
						$sort=$_POST['sorting'];
						if ($sort=='ascend') 
						{
							for ($i=0; $i < count($sArr); $i++) 
							{ 
								for ($j=$i+1; $j < count($sArr); $j++) 
								{ 
									if ($sArr[$i] > $sArr[$j]) 
									{
										$temp=$sArr[$i];
										$sArr[$i]=$sArr[$j];
										$sArr[$j]=$temp;
									}
								}
							}
						//print_r($sArr);
						echo "Array before ascending sort: </br>";
						for ($i=0; $i < count($sArr); $i++)
						{ 
							echo "$sArr[$i]</br>";
						}
					}
					elseif ($sort=='descend') 
					{
			
						for ($i=0; $i < count($sArr); $i++) 
						{ 
							for ($j=$i+1; $j < count($sArr); $j++) 
							{ 
								if ($sArr[$i] < $sArr[$j]) 
								{
									$temp=$sArr[$i];
									$sArr[$i]=$sArr[$j];
									$sArr[$j]=$temp;
								}	
							}
						}
						//print_r($sArr);
						echo "Array before descending sort: </br>";
						for ($i=0; $i < count($sArr); $i++)
						{ 
							echo "$sArr[$i]</br>";
						}
					}
				}
			?>
			</td>
		</tr>
		<tr>
			<td>
				<form action="q12.php" method="post">
			</br>
				<input type="radio" name="sorting" value="ascend" checked>Ascending Sort</input>
				<input type="radio" name="sorting" value="descend">Descending Sort</input>
			</td>
			<td>
				<input type="submit" name="Sort" value="Sort">
				</form>
			</td>
		</tr>
	</table>
</div>
</body>
<footer id="foot">
		- Created by 🅼onu 🅶upt🅰<br>
		(186450307027)
</footer>
</html>