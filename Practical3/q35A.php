<!DOCTYPE html>
<html>
<head>
	<title>Age Calc for 5 persons</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Practical3/style.css">
</head>
<body>
	<?php
		include '../menubar/menu.html';
	?>
	<div style="padding-top: 70px;">
	<form action="q35Apost.php" method="post">
		<table id="table">
			<tr style="background-color: #D3D3D3;">
				<th>Sr</th>
				<th>Name</th>
				<th>Birth Date</th>
			</tr>
			<?php
				for ($i=0; $i<5; $i++) { 
			?>
				<tr style="background-color: #ADD8E6;">
					<td><?php echo $i+1; ?></td>
					<td><input type="text" name="name<?php echo $i+1; ?>" placeholder="Your Name" required="required"></td>
					<td><input type="date" name="birthdate<?php echo $i+1; ?>"></td>
				</tr>
			<?php } ?>
				<tr style="background-color: #ADD8E6;"><td colspan="3" align="center"><input type="submit" name="submit" value="Submit"></td></tr>
		</table>
	</form>
</div>
</body>
<footer id="foot">- Created by 🅼onu 🅶upt🅰<br>(186450307027)</footer>
</html>