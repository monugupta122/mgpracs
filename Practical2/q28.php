<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Practical2/style.css">
	<title>Weekend or not</title>
</head>
<body>
<?php
	include '../menubar/menu.html';
?>
<div style="padding-top: 70px;">
<div id="box">
	<table id="table">
		<form action="q28.php" method="post">	
			<label>Select a date</label><br>
			<input type="date" name="date1"><br>
			<input type="submit" name="submit" value="Check"><br>
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
								echo "<br>";
								$d1=mktime(0,0,0,$d1[1],$d1[2],$d1[0]);
								$d1=getdate($d1);
								if ($d1['weekday']=="Sunday" || $d1['weekday']=="Saturday") 
								{
									echo "It's a Weekend";
								}
								else
								{
									echo "It's a Normal day";
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