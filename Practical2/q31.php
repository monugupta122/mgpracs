<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Practical2/style.css">
	<title>Question no 31</title>
	<style>
		#t2
		{
			font-weight: bold;
			border: 1px solid #ddd;
  			height: 50px;
 			border-collapse: collapse;
  			text-align: center;
		}
	</style>
</head>
<body>
<?php
	include '../menubar/menu.html';
?>
<div style="padding-top: 70px;">
	<form action="q31.php" method="POST">
		<table id="table">
			<tr>
				<td>Enter Year [Min=1900 and Max=2100]</td>
				<td><input type="number" name="num1" min="1900" max="2100"></td>
			</tr>
			<tr>
				<td>Color 1</td>
				<td><input type="Color" name="color1" value="#F49820"></td>
			</tr>
			<tr>
				<td>Color 2</td>
				<td><input type="Color" name="color2" value="#FFFFFF"></td>
			</tr>
			<tr>
				<td>Color 3</td>
				<td><input type="Color" name="color3" value="#008000"></td>
			</tr>
			<tr>
				<td><input type="reset" name="reset" value="Reset"></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	<?php
		if (isset($_POST['submit'])) 
		{
			$year=$_POST['num1'];
			$color1=$_POST['color1'];
			$color2=$_POST['color2'];
			$color3=$_POST['color3'];
	?>
		<table align="center" style="color: blue; width: 100%;">
			<tr style="background-color: grey; color: black;" id="t2">
				<th>Sr</th>
				<th>Date</th>
				<th>Festival Name</th>
				<th>Weekday</th>
			</tr>
			<tr style="background-color: <?php echo "$color1"; ?>" id="t2">
				<td>1</td> 
				<td><?php echo "26th January ".$year; ?></td>
				<td><?php echo "Republic Day"; ?></td>
				<td>
					<?php 
						$d1=getdate(mktime(0,0,0,1,26,$year));
						echo $d1['weekday'];
				 	?>
				 </td>
			</tr>
			<tr style="background-color: <?php echo "$color2"; ?>" id="t2">
				<td>2</td>
				<td><?php echo "2nd October ".$year; ?></td>
				<td><?php echo "Gandhi Jayanti"; ?></td>
				<td>
					<?php 
						$d1=getdate(mktime(0,0,0,10,2,$year));
						echo $d1['weekday'];
				 	?>
				 </td>
			</tr>
			<tr style="background-color: <?php echo "$color3"; ?>" id="t2">
				<td>3</td>
				<td><?php echo "15th August ".$year; ?></td>
				<td><?php echo "Independence Day"; ?></td>
				<td>
					<?php 
						$d1=getdate(mktime(0,0,0,8,15,$year));
						echo $d1['weekday'];
				 	?>
				 </td>
			</tr>
		</table>
	<?php
		}
	?>
	</form>
</div>
</body>
<footer id="foot">- Created by 🅼onu 🅶upt🅰<br>(186450307027)</footer>
</html>