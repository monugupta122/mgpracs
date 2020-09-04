<!DOCTYPE html>
<html>
<head>
	<title>Age calc for 5 persons</title>
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
	for ($i=1; $i <= 5; $i++) { 
		$name[]=$_POST["name$i"];
		$b_date[]=$_POST["birthdate$i"];
	}

	for ($i=0; $i < 5; $i++) { 
		$name[$i]=ucwords($name[$i]);
		$bdate[$i]=explode('-', $b_date[$i]);
		$pdate[]=mktime(0,0,0,date('m'),date('d'),date('Y'));
	}
	$i=0;
	foreach ($bdate as $in_arr) 
	{
		$bdate[$i]=mktime(0,0,0,$in_arr[1],$in_arr[2],$in_arr[0]);
		$i++;
	}
	
	for ($i=0; $i < 5; $i++) { 
		$year[]=age_count($bdate[$i],$pdate[$i]);
	}
	for ($i=0; $i < 5; $i++) { 
		$days_remain[]=remain_days($bdate[$i],$pdate[$i]);
	}
	
	?>
	<table id="table">
		<tr style="background-color: #D3D3D3;">
				<th>Sr</th>
				<th>Name</th>
				<th>Birth Date</th>
				<th>Age</th>
				<th>Days to go...</th>
		</tr>
		<?php for ($i=0; $i < 5; $i++) { ?>
		<tr style="background-color: #ADD8E6;">
			<td><?php echo $i+1; ?></td>
			<td><?php echo $name[$i]; ?></td>
			<td><?php echo $b_date[$i]; ?></td>
			<td>
				<?php
					if ($year[$i]==-1) {
						echo "Enter correct date of birth!";
					}
					else{
						echo $year[$i]." Years ";
					}
				?>
			</td>
			<td style="background-color: <?php
				if ($days_remain[$i]<=30) {
					echo "#D5210C;";
				}
				elseif ($days_remain[$i]<=(6*30) && $days_remain[$i]>=30) {
					echo "#6B72B6;";
				}
				elseif ($days_remain[$i]<=(12*30) && $days_remain[$i]>=(6*30)) {
					echo "#0CD5CF;";
				}
				?>" >
				<?php
					echo $days_remain[$i];
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
	function age_count($bdate,$pdate)
	{
		$d1=getdate($bdate);
		$d1=$d1['year'];
		$d2=getdate($pdate);
		$d2=$d2['year'];
		$leapdays= is_leap($d1,$d2);
			//echo "$leapdays";

		$daysinmk=($pdate-$bdate-($leapdays*24*60*60));
		$years=floor($daysinmk/(365*24*60*60));

		$monthsinmk=$daysinmk%(365*24*60*60);
		$months=floor($monthsinmk/(30*24*60*60));
		//$years=floor($years);
		//$months=floor($months);
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

	function nxt_leap_year($year)
	{
		$i=$year;
		while (1) {
			$i++;
			if ((($i%4==0) && ($i%100!=0)) || ($i%400==0)) {
				break;
			}
		}
		return $i;
	}
	
	function remain_days($bdate,$pdate)
	{
		$bdate=getdate($bdate);
			//print_r($bdaymon);
			//echo "<br>";
		$pdate=getdate($pdate);
			//print_r($premon);
		$present_bmonth=mktime(0,0,0,$bdate['mon'],$bdate['mday'],$pdate['year']);
			//echo "<br>$present_bmonth";
		$present_month=mktime(0,0,0,$pdate['mon'],$pdate['mday'],$pdate['year']);
			//echo "<br>$present_month";
		if($bdate['mon']==2 && $bdate['mday']==29)
		{
			$present_bmonth=mktime(0,0,0,$bdate['mon'],$bdate['mday'],$nxt_year=nxt_leap_year(date('Y')));
			$days_remain=($present_bmonth-$present_month);
			$days_remain=$days_remain/(24*60*60);
			return $days_remain;
		}
		else
		{
			if ($present_bmonth>=$present_month) 
			{
				$days_remain=($present_bmonth-$present_month);
				$days_remain=$days_remain/(24*60*60);
				return $days_remain;
			}
			else
			{
				$present_bmonth=mktime(0,0,0,$bdate['mon'],$bdate['mday'],$pdate['year']+1);
				$days_remain=($present_bmonth-$present_month);
				$days_remain=$days_remain/(24*60*60);
				return $days_remain;
			}
		}
	}
?>
