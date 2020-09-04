<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Practical2/style.css">
	<title>Finding duplicate values from an Array</title>
</head>
<body>
	<?php
		include '../menubar/menu.html';
	?>
	<div style="padding-top: 70px;">
	<div id="box">
	<center>
	<form action="q20.php" method="post">
		<textarea name="text" rows="4" cols="30" placeholder="Enter string here seperated by commas(,)(ONLY ALPHABETS):" ></textarea>
	</br>
		<input type="submit" name="submit" value="Check">
	</form>
	<?php 
		if (isset($_POST['submit'])) 
		{
			$sArr=explode(",", $_POST['text']);
			//print_r($sArr);
			$count=array();
			for ($i=0; $i < count($sArr); $i++)
    		{ 
				$count[$i]=0;
			}
			foreach ($sArr as $ele) 
			{
				for ($i=0; $i < count($sArr); $i++) 
				{ 
					if ($ele==$sArr[$i]) 
					{
						$count[$i]++;
					}
				}
			}
			echo "<table id='table'>";
			echo "<th>String</th><th>Duplication</th>";
			for ($i=0; $i < count($sArr); $i++) 
			{ 
				if ($count[$i]>1) 
				{
					echo "<tr><td>".$sArr[$i]."</td>"."<td>"."Duplicate"."</td></tr>";
				}
				else
				{
					echo "<tr><td>".$sArr[$i]."</td>"."<td>"."Non-Duplicate"."</td></tr>";
				}
				
			}
			echo "</table>";
		}
	?>
</center>
</div>
</div>
</body>
<footer id="foot">- Created by 🅼onu 🅶upt🅰<br>(186450307027)</footer>
</html>