<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Practical2/style.css">
	<title>Occurences of Alphabets</title>
</head>
<body>
	<?php
		include '../menubar/menu.html';
	?>
	<div style="padding-top: 70px;">
	<?php
		$str=$_POST['text'];
		echo "<center>Entered String: ".$str."</center>";
		$str=str_replace(' ','',$str);
		$strArr=str_split($str);
		//print_r($strArr);
		$count=array();
		for ($i=0; $i < 26; $i++)
    	{ 
			$count[$i]=0;
		}
		for ($i=0; $i < count($strArr) ; $i++)
		{
			if ($strArr[$i]>='a' && $strArr[$i]<='z') 
			{
				$x=ord($strArr[$i])-97;
		    	$count[$x]++;
			}
			elseif ($strArr[$i]>='A' && $strArr[$i]<='Z') 
			{
		    	$x=ord($strArr[$i])-65;
		    	$count[$x]++;
			}
		}
	?>
	<table id="table">
		<tr>
			<th>Alphabet</th>
			<th>Occurences</th>
		</tr>



			<?php
				for ($i=0; $i < count($count); $i++) 
				{ 
			?>
				<tr>
					<td>
						<?php
							$alpha=chr($i+65);
							echo $alpha."<br>";
						?>
					</td>
					<td>
						<?php
							{ 
								echo $count[$i];
							}	
						?>
					</td>
			<?php
				}
			?>
				</tr>
	</table>
</div>
</body>
<footer id="foot">- Created by 🅼onu 🅶upt🅰<br>(186450307027)</footer>
</html>