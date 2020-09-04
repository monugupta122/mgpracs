<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Practical2/style.css">
	<title>Days Difference</title>
</head>
<body>
<?php
	include '../menubar/menu.html';
?>
<div style="padding-top: 70px;">
<div id="box">
	<table id="table">
		<form action="q26.php" method="post">
			<label>Enter Date 1</label><br>
			<input type="date" name="date1"></br><br>
			<label>Enter Date 2</label><br>
			<input type="date" name="date2"></br>
			<input type="submit" name="submit" value="Check">
				
			<?php
				if (isset($_POST['submit'])) 
				{
			?>
					<tr>
						<td colspan="2" align="center">
							<?php
								$d1=$_POST['date1'];
								$d2=$_POST['date2'];
								echo "Entered Date : ".$d1;
								echo "<br>Entered Date : ".$d2;
								$d1=explode('-', $d1);
								$d2=explode('-', $d2);
								//print_r($d1);
								$d1=mktime(0,0,0,$d1[1],$d1[2],$d1[0]);
								$d2=mktime(0,0,0,$d2[1],$d2[2],$d2[0]);
								$daysinmk=($d2-$d1);
								$daysdiff=$daysinmk/(24*60*60);
								echo "<br>Days Difference : ".floor($daysdiff);
							?>
						</td>
					</tr>
			<?php
				}
			?>
		</form>
	</table>
</div>
</div>
</body>
<footer id="foot">- Created by 🅼onu 🅶upt🅰<br>(186450307027)</footer>
</html>