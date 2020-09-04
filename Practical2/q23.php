<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Practical2/style.css">
	<title>MKTIME Function</title>
</head>
<body>
<?php
	include '../menubar/menu.html';
?>
<div style="padding-top: 70px;">
<div id="box">
	<table id="table" style="background-color: blue">
		<tr>
			<td style="background-image: linear-gradient(to right,orange,white,green)">
				<?php
					$d1=mktime(0,0,0,1,26,2020);
					$dArr1=getdate($d1);
					//print_r($dArr);
					echo "26 January which is celebrated as Republic Day will come on ".$dArr1['weekday']." this year";
				?>
			</td>
		</tr>
		<tr>
			<td style="background-image: linear-gradient(to right,orange,white,green)">
				<?php
					$d2=mktime(0,0,0,8,15,2020);
					$dArr2=getdate($d2);
					//print_r($dArr);
					echo "15 August which is celebrated as Independence Day will come on ".$dArr2['weekday']." this year";
				?>
			</td>
		</tr>
	</table>
</div>
</div>
</body>
<footer id="foot">- Created by 🅼onu 🅶upt🅰<br>(186450307027)</footer>
</html>