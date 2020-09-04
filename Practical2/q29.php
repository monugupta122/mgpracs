<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Practical2/style.css">
	<title>Last Day of every Month</title>
</head>
<body>
<?php
	include '../menubar/menu.html';
?>
<div style="padding-top: 70px;">
	<table id="table">
		<?php
			for ($i=1; $i <=12; $i++) 
			{
		?>
		<tr>
			<td>
				<?php
					{ 
						$d1=(mktime(0,0,0,$i,1,2020));
						$d1=strtotime(date('t-n-Y',$d1)); //t = last day of month
						$d1=getdate($d1);
						//print_r($d1);
						echo "Last day of ".$d1['month']." is ".$d1['weekday'];
						echo "<br>";
					}
				?>
			</td>
		</tr>
		<?php
			}
		?>
	</table>
</div>
</body>
<footer id="foot">- Created by 🅼onu 🅶upt🅰<br>(186450307027)</footer>
</html>
