<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Practical2/style.css">
	<title>Question no 32</title>
	<style>
		tr
		{
			height: 50px;
		}
		th
		{
			background-color: red;
			font-weight: bolder;
		}
	</style>
</head>
<body>
<?php
	include '../menubar/menu.html';
?>
<div style="padding-top: 70px;">
	<form action="q32.php" method="POST">
		<table id="table">
			<tr>
				<td>Enter Numbers with Comma(,)</td>
				<td>
					<textarea name="text" style="height: 150px; width: 300px;" required="required" placeholder="Numbers with Comma(,)"></textarea>
				</td>
			</tr>
			<tr>
				<td><input type="reset" name="reset" value="Reset"></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
		<?php
			if (isset($_POST['submit'])) 
			{
				$Arr=explode(",", $_POST['text']);
				//print_r($Arr);
				$functions=array('Odd'=>0,'Even'=>0,'Prime'=>0);
				$color=array('#6219FF','#854CFF','#B999FF');
				for ($i=0; $i < count($Arr); $i++) 
				{ 
					if ($Arr[$i] % 2 == 0) 
					{
						$functions['Even']++;
					}
					else
					{
						$functions['Odd']++;
					}
					if($Arr[$i]==1)
						continue;
					if (primeno($Arr[$i])) 
					{
						$functions['Prime']++;
					}
				}
				arsort($functions);
		?>
		<table border="8" width="100%" style="text-align: center;" cellpadding="10px" align="center">
			<tr>
				<th>Sr</th>
				<th>Function</th>
				<th>Occurences</th>
			</tr>
			<?php
				$i=0;
				foreach ($functions as $key => $value) {
			?>
				<tr style="background-color: <?php echo $color[$i]; ?>";>
					<td><?php echo $i+1; ?></td>
					<td><?php echo $key; ?></td>
					<td><?php echo $value; ?></td>
				</tr>
			<?php
				$i++;
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
            }
        return 1;
	}
?>