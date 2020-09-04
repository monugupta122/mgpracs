<!DOCTYPE html>
<html>
<head>
	<title>Finding prime numbers</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Practical3/style.css">
</head>
<body>
	<?php
		include '../menubar/menu.html';
	?>
	<div style="padding-top: 70px;">
	<?php
		for ($i=1; $i<=5; $i++) { 
			$number[] = $_POST["number$i"];
			$direction[] = $_POST["direction$i"];
		}
	?>
	<table id="table">
		<tr align="center">
			<th colspan="4">Search Prev Or Next Prime Numbers</th>
		</tr>
		<tr>
			<th>Sr</th>
			<th>Entered Number</th>
			<th>Searching Direction</th>
			<th>Prev/Next Prime Number</th>
		</tr>
	<?php
		for ($i=0; $i < 5; $i++) { 
	?>
		<tr>
			<td><?php echo $i+1; ?></td>
			<td><?php echo $number[$i]; ?></td>
			<td>
				<?php
					if ($direction[$i]=='F') {
						echo "Forward";
					}
					else{
						echo "Reverse";
					}
				?>
			</td>
			<td>
				<?php
					if ($direction[$i]=='F') {
						$num=forward_primeno($number[$i]);
						echo $num;
					}
					else{
						$num=reverse_primeno($number[$i]);
						echo $num;
					}
				?>
			</td>
		</tr>
	<?php } ?>
	</table>
</div>
</body>
<footer id="foot">- Created by 🅼onu 🅶upt🅰<br>(186450307027)</footer>
</html>
<?php
	function isprimeno($n)
	{
	    for ($i=2; $i < $n; $i++)
		if ($n % $i == 0)
	        {
	            return 0;
	        }
	    return 1;
	}

	function forward_primeno($n)
	{
		$prime=$n;
		$flag=0;
		while ($flag!=1) {
			$prime++;
			if (isprimeno($prime)) {
				$flag=1;
			}
		}
		return $prime;
	}

	function reverse_primeno($n)
	{
		$prime=$n;
		$flag=0;
		if($n==2 || $n==3){
			return $prime;
		}
		else{
			while ($flag!=1) {
				$prime--;
				if (isprimeno($prime)) {
					$flag=1;
				}
			}
			return $prime;
		}
	}
?>