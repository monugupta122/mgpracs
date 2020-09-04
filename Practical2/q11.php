<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Email Validation</title>
	<link rel="stylesheet" type="text/css" href="../Practical2/style.css">
</head>
<body>
	<?php
		include '../menubar/menu.html';
	?>
	<div style="padding-top: 70px;">
	<div id="box">
	<center>
		<form class="box" action="q11.php" method="post">
		<input type="text" name="email" placeholder="@email.com">
	</br>
		<input type="submit" name="submit" value="Submit">
	</form>
</br>
	<?php
	if (isset($_POST['submit']))
	{ 
		$email = $_POST['email'];
		echo "<center>Entered e-mail: ".$email."</br></center>";
		$atrpos=strrpos($email,"@");
		//echo "$atrpos";
		if (recinamevalidation($email) && domainvalidation($email) && bwatrdot($email) && $atrpos>=5 && $atrpos<=32)
		{
			echo "<center>Email is Valid</center>";
		}
		else
		{
			echo "<center>Email is invalid</center>";
		}
	}

	function domainvalidation($email)
	{
		$atrpos=strrpos($email,"@");
		$dotpos=strrpos($email, ".");
		//echo "$dotpos</br>";
		$elen=strlen($email);
		//echo "$elen</br>";
		//$domain=substr($email,$atrpos+1);
		if (($elen-1-$dotpos)>=2 && ($elen-1-$dotpos)<=3 && $atrpos<$dotpos) 
		{
			return 1;
		}
		return 0;
		//echo "$domain";
	}

	function recinamevalidation($email)
	{
		$atrpos=strrpos($email,"@");
		$reciname=substr($email,0,$atrpos);
		//echo "$reciname</br>";
		$chArr=str_split($reciname);
		foreach ($chArr as $ch) 
		{
			if (!($ch>='a' && $ch<='z' || $ch>='0' && $ch<='9' || $ch=='$' || $ch=='&' || $ch=='-' || $ch=='_' || $ch=='_'))
		    {
				return 0;
			}
		}
		return 1;
	}

	function bwatrdot($email)
	{
		$atrpos=strrpos($email,"@");
		$dotpos=strrpos($email, ".");
		$elen=strlen($email);
		if ($dotpos-1-$atrpos>=4 && $dotpos-1-$atrpos<=8 && $atrpos<$dotpos) 
		{
			return 1;
		}
		return 0;
	}
	?>
	</center>	
</div>
</div>
</body>
<footer id="foot">
    - Created by 🅼onu 🅶upt🅰<br>
    (186450307027)
</footer>
</html>