<!DOCTYPE html>
<html>
<head>
	<title>Question no 41</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Practical3/style.css">
</head>
<body>
	<?php
		include '../menubar/menu.html';
	?>
	<div style="padding-top: 70px;">
	<form action="q41post.php" method="post">
		<table id="table">
			<tr>
				<th>Sr No</th>
				<th>Name</th>
				<th>Mobile No</th>
				<th>City</th>
				<th>Birth Date</th>
			</tr>
			<?php
				$cities = array("Ahmedabad","Amreli","Anand","Banaskantha","Bharuch","Bhavnagar","Dahod","Gandhinagar","Jamnagar","Junagadh","Kutch","Kheda","Mehsana","Narmada","Navsari","Panchmahal","Patan","Porbandar","Rajkot","Sabarkantha","Surat","Surendranagar","Tapi","Dangs","Vadodara","Valsad");
				for ($i=0; $i < 10; $i++) { 
			?>
				<tr>
					<td><?php echo $i+1; ?></td>
					<td><input type="text" name="name<?php echo $i+1; ?>" placeholder="Your Name" required="required"></td>
					<td><input type="number" maxlength="10" name="mobno<?php echo $i+1 ?>"></td>
					<td>
						<input list="city" name="city<?php echo $i+1; ?>">
							<datalist id="city">
								<?php for ($j=0; $j < count($cities); $j++) { ?>
								<option value="<?php echo $cities[$j]; ?>">
								<?php } ?>
							</datalist>
					</td>
					<td><input type="date" name="birthdate<?php echo $i+1; ?>"></td>
				</tr>
			<?php } ?>
				<tr><td colspan="5" align="center"><input type="submit" name="submit" value="Calculate"></td></tr>
		</table>
	</form>
</div>
</body>
<footer id="foot">- Created by 🅼onu 🅶upt🅰<br>(186450307027)</footer>
</html>