<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Practical2/style.css">
	<title>String conversion to lower case</title>
</head>
<body>
	<?php
		include '../menubar/menu.html';
	?>
	<div style="padding-top: 70px;">
	<form action="q17.php" method="post">
		<table id="table">
			<tr>
				<td>
					<label>Enter string text</label>
				</br>
					<textarea name="text1" rows="4" cols="30" placeholder="Enter string here in UPPER CASE:" ></textarea>
				</td>
				<td>
					<label>String in lower case:</label>
				</br>
				</br>
					<?php
						if (isset($_POST['submit'])) 
						{
							$text=$_POST['text1'];
							$text=strtolower($text);
							echo $text;
						}
					?>
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
				<td>
					
				</td>
			</tr>
		</table>
	</form>
</div>
</body>
<footer id="foot">- Created by 🅼onu 🅶upt🅰<br>(186450307027)</footer>
</html>