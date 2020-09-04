<?php
	for ($i=1; $i <=10; $i++) { 
		$city[]=$_POST["city$i"];
		$mobno[]=$_POST["mobno$i"];
		$name[]=$_POST["name$i"];
		$b_date[]=$_POST["birthdate$i"];
	}
	for ($i=0; $i < 10; $i++) { 
		$name[$i]=ucwords($name[$i]);
		$city[$i]=ucwords($city[$i]);
		$bdate[$i]=explode('-', $b_date[$i]);
		$pdate[]=mktime(0,0,0,date('m'),date('d'),date('Y'));
	}
	$i=0;
	foreach ($bdate as $in_arr) 
	{
		$bdate[$i]=mktime(0,0,0,$in_arr[1],$in_arr[2],$in_arr[0]);
		$i++;
	}
	for ($i=0; $i < 10; $i++) { 
		$age[]=age_count($bdate[$i],$pdate[$i]);
	}
?>
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
	<table id="table">
		<tr>
			<th>Sr No</th>
			<th>Name</th>
			<th>Mobile No</th>
			<th>City</th>
			<th>Age</th>
		</tr>
		<?php for ($i=0; $i < 10; $i++) { 
			if ($age[$i]<40 && $city[$i]=="Bharuch") {
		?>
		<tr>
			<td><?php echo $i+1; ?></td>
			<td><?php echo $name[$i]; ?></td>
			<td><?php echo $mobno[$i]; ?></td>
			<td><?php echo $city[$i]; ?></td>
			<td>
				<?php
					if ($age[$i]==-1) {
						echo "Enter correct date of birth!";
					}
					else{
						 echo $age[$i]; 
					}
				?>
			</td>
		</tr>
		<?php
		 		}
		 	} 
		?>
	</table>
</body>
</div>
<footer id="foot">- Created by 🅼onu 🅶upt🅰<br>(186450307027)</footer>
</html>
<?php
	function age_count($bdate,$pdate)
	{
		$d1=getdate($bdate);
		$d1=$d1['year'];
		$d2=getdate($pdate);
		$d2=$d2['year'];
		$leapdays= is_leap($d1,$d2);

		$daysinmk=($pdate-$bdate-($leapdays*24*60*60));
		$years=floor($daysinmk/(365*24*60*60));
		if ($years < 0){
			$years=-1;
			return $years;
		}
		else
			return $years;
	}
	function is_leap($year1,$year2)
	{
		$count=0;
		for ($i=$year1; $i <= $year2; $i++) 
		{ 
			if((($i%4==0) && ($i%100!=0)) || ($i%400==0))
			{
				$count++;
			}
		}
		return $count;
	}
?>