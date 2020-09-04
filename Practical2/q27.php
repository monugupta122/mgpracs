<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Practical2/style.css">
	<title>Age Calculator</title>
</head>
<body>
<?php
	include '../menubar/menu.html';
?>
<div style="padding-top: 70px;">
<div id="box">
	<table id="table">
		<form action="q27.php" method="post">
			<label>Enter your Date of Birth</label><br>
			<input type="date" name="date1"><br>
			<input type="submit" name="submit" value="Calculate"><br>
			<?php
				if (isset($_POST['submit'])) 
				{
			?>
					<tr>
						<td colspan="2" align="center">
							<?php
								$d1=$_POST['date1'];
								echo "Entered Date : ".$d1;
								$d1=explode('-', $d1);
								$d2=mktime();
								$d1=mktime(0,0,0,$d1[1],$d1[2],$d1[0]);
								$daysinmk=($d2-$d1);
								$daysdiff=$daysinmk/(365*24*60*60);
								$daysdiffinmon=$daysinmk%(365*24*60*60);
								$daysdiffinmon=$daysdiffinmon/(30*24*60*60);
								//echo "<br>$daysdiffinmon";
								if ($daysdiff < 0) 
								{
									echo "<br>Enter correct date";
								}
								else
								{
									echo "<br>Your Age : ".floor($daysdiff)." Years ".floor($daysdiffinmon)." Months";
								}								
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