<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Practical2/style.css">
	<title>Days to be left</title>
</head>
<body>
<?php
	include '../menubar/menu.html';
?>
<div style="padding-top: 70px;">
<div id="box">
	<div style="background-image: linear-gradient(to right,orange,white,green); height: 50px; padding: 20px; text-align: center;">
		<?php
			$d1=mktime();
			$d2=mktime(0,0,0,10,2,2020);
			$daysinmk=($d2-$d1);
			$daysdiff=$daysinmk/(24*60*60);
			echo "Days to be left for the birthday of our Father of the Nation ( Mahatma Gandhi ) are: ".floor($daysdiff);
		?>
	</div>
</div>
</div>
</body>
<footer id="foot">- Created by 🅼onu 🅶upt🅰<br>(186450307027)</footer>
</html>
