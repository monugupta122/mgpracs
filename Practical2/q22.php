<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Practical2/style.css">
	<title>String Replacement</title>
</head>
<body>
<?php
	include '../menubar/menu.html';
?>
<div style="padding-top: 70px;">
<div id="box">
	<?php
		$str1="gujarat is my country";
		echo "String is : ".$str1."</br>";
		echo "String to be replaced with gujarat : india<br>";
		$strf=ucwords(str_replace('gujarat','india', $str1));
		echo "String after replacememt : ".$strf;
	?>
</div>
</div>
</body>
<footer id="foot">- Created by 🅼onu 🅶upt🅰<br>(186450307027)</footer>
</html>