<!DOCTYPE html>
<html>
<head>
	<title>Question no 40</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Practical3/style.css">
</head>
<body>
	<?php
		include '../menubar/menu.html';
	?>
	<div style="padding-top: 70px;">
	<table id="table">
		<form action="q40.php" method="post">
			<tr>
				<td>Enter Paragraph</td>
				<td><textarea name="text" rows="10" cols="100%" placeholder="Enter string for Array  seperated by space( )" required></textarea></td>
			</tr>
			<tr align="center">
				<td colspan="2"><input type="submit" name="submit" value="Submit"></td>
			</tr>
			<?php
				if (isset($_POST['submit'])) {
					$text=$_POST['text'];
					$textArr=explode(' ', $text);
					//print_r($textArr);
			?>
			<tr align="center"><td colspan="2">Entered text : <?php echo $text; ?></td></tr>
		</form>
	</table>
	<table id="table">
		<tr align="center">
			<th>Type</th>
			<th>Words</th> 
			<th>Count</th>
		</tr>
			<?php for ($i=2; $i <=4; $i++) { ?>
			<tr>
				<td><?php echo $i; ?> letters</td>
				<td>
					<?php
						$count=0;
						for ($j=0; $j < count($textArr); $j++) { 
							if (strlen($textArr[$j])==$i) {
								$count++;
								echo $textArr[$j].", ";
							}
						}	//for j loop
					?>
				</td>
				<td><?php echo $count; ?></td>
			</tr>
			<?php
					}  	//for i loop
				}		//isset over
			?>
	</table>
</div>
</body>
<footer id="foot">- Created by 🅼onu 🅶upt🅰<br>(186450307027)</footer>
</html>