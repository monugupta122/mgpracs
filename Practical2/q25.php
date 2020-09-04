<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Practical2/style.css">
	<title>Current date</title>
</head>
<body>
	<?php
		include '../menubar/menu.html';
	?>
	<div style="padding-top: 70px;">
	<div id="box">
		<?php
			/*$d1=mktime();
			$d1=getdate($d1);
			print_r($d1);
			echo "<br>";
			echo $d1['mday'].$d1['mon'].$d1['year'];*/
			$d1=date('d-m-Y');
			echo "Current Date is : ".$d1;
			$d1=date('h:i A');
			echo "<br>Current Time is : ".$d1;
		?>
	</div>
</div>
</body>
<footer id="foot">- Created by 🅼onu 🅶upt🅰<br>(186450307027)</footer>
</html>