<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Practical2/style.css">
	<title>Prime Numbers from given Range</title>
</head>
<body>
	<?php
		include '../menubar/menu.html';
	?>
	<div style="padding-top: 70px;">
	<div id="box">
	<center>
	<form action="q19.php" method="post">
		<input type="Number" name="num1" min="2" placeholder="Enter number1 (Lower Limit)">
	</br>
		<input type="Number" name="num2" placeholder="Enter number2 (Upper Limit)">
	</br> 
		<input type="submit" name="submit" value="Submit">
	</form>
		<?php
			if (isset($_POST['submit']))
			{
				
		?>
				<table id="table">
				<tr>
					<th>Prime Numbers are</th>
				</tr>
				<?php
					$lower=$_POST['num1'];
					$upper=$_POST['num2'];
					if($lower<=$upper)
    				{
        				for ($i = $lower; $i <= $upper; $i++)
       	 				{
       	 					primeno($i);            					
        				}
    				}
    				else
    				{
        				echo "Entered lower limit must be smaller then the upper limit ";
   					}	
			}
				?>
	</table>
</center>
</div>
</div>
</body>
<footer id="foot">- Created by 🅼onu 🅶upt🅰<br>(186450307027)</footer>
</html>
<?php
	function primeno($i)
	{
		$prime = 1;
        for ($n = 2; $n < $i; $n++)
		if ($i % $n == 0)
                {
                    $prime = 0;
                    break;
                }
            if ($prime == 1)
            	echo "<tr><td>".$i."</td></tr>";
	}
?>