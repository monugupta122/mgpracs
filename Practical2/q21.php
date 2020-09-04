<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Practical2/style.css">
	<title>Checking a particular string</title>
</head>
<body>
	<?php
		include '../menubar/menu.html';
	?>
	<div style="padding-top: 70px;">
	<form action="q21.php" method="post">
	<table id="table">
		<tr>
			<td>
				<textarea name="text" rows="4" cols="40" placeholder="Enter string here (ONLY ALPHABETS) seperated by space( ):" ></textarea>
			</td>
	<?php
		if (isset($_POST['submit'])) 
		{
	?>
			<td rowspan="3">
		<?php
			$str=$_POST['str'];
			$txt= $_POST['text'];
			$txtArr=explode(" ",$txt);
			//print_r($txtArr);
			echo "Entered String: ".$txt;
			//$flag;
			for ($i=0; $i < count($txtArr); $i++) 
			{ 
				
				if($str==$txtArr[$i])
				{
					echo "</br>String (".$str.") is present and is present at position ".($i+1);
					$flag=1;
					break;
				}
				else
				{
					$flag=0;
				}
			}
			if ($flag==0) 
			{
				echo "</br>String ($str) not present";
			}
				
		}
	?>
		</td>
	</tr>
	<tr>
		<td>
			<textarea name="str" rows="2" cols="40" placeholder="Enter the string to be check" ></textarea>
		</td>
	</tr>
	<tr>
		<td>
			<input type="submit" name="submit" value="Check">
			</form>
		</td>
	</tr>
</table>
</div>
</body>
<footer id="foot">- Created by 🅼onu 🅶upt🅰<br>(186450307027)</footer>
</html>