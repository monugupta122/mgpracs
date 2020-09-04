<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Practical2/style.css">
	<title>Question no 30</title>
</head>
<body>
<?php
	include '../menubar/menu.html';
?>
<div style="padding-top: 70px;">
	<form action="q30.php" method="post">
		<table id="table">
			<tr>
				<th align="center" style="font-weight: bold;" colspan="2">Enter Range</th>
			</tr>
			<tr>
				<td>Enter Number 1 </td>
				<td>
					<input type="Number" name="number1" min="1" max="10000">
				</td>
			</tr>
			<tr>
				<td>Enter Number 2 </td>
				<td>
					<input type="Number" name="number2" min="1" max="10000">
				</td>
			</tr>
			<tr>
				<td>Prime Number Color</td>
				<td>
					<input type="Color" name="color" value="#002AFF">
				</td>
			</tr>
			<tr>
				<td>
					<input type="reset" name="reset" value="Reset">
				</td>
				<td>
					<input type="submit" name="submit" value="Submit">
				</td>
			</tr>
		</table>
		<?php
			if (isset($_POST['submit'])) 
			{
				$num1=$_POST['number1'];
				$num2=$_POST['number2'];
				$color=$_POST['color'];
		?>
		<table id="table">
			<tr>
				<th>Sr</th>
				<th>Number</th>
			</tr>
			<?php
				for ($i=1; $i <= 10; $i++) 
				{ 
			?>
				<tr>
					<td>
						<?php echo $i; ?>
					</td>
						<?php
							$randno = rand($num1,$num2);
							//echo "$randno";
							if (primeno($randno)) 
							{
						?>
							<td style="background-color: <?php echo"$color"; ?>"><?php echo $randno; ?> </td>
						<?php	
							}
							else
							{
						?>
								<td><?php echo $randno."<br>"; ?></td>
						<?php
							}
						?>
					
				</tr>
			<?php
				}
			?>
		</table>
		<?php
			}
		?>
	</form>
</div>
</body>
<footer id="foot">- Created by 🅼onu 🅶upt🅰<br>(186450307027)</footer>
</html>
<?php
	function primeno($i)
	{
        for ($n = 2; $n < $i; $n++)
		if ($i % $n == 0)
        	{
            	return 0;
            	break;
            }
        return 1;
	}
?>