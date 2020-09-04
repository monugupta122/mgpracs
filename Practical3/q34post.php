<!DOCTYPE html>
<html>
<head>
	<title>Age Calc</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Practical3/style.css">
	<style>
		#color{
			color: red;
		}
	</style>
</head>
<body>
	<?php
		include '../menubar/menu.html';
	?>
	<div style="padding-top: 70px;">
	<?php
		$name=$_POST['name'];
		$name=ucwords($name);
		$b_date=$_POST['birthdate'];
		$bdate=explode('-', $b_date);
			//print_r($bdate);
		$pdate=mktime(0,0,0,date('m'),date('d'),date('Y'));
		$bdate=mktime(0,0,0,$bdate[1],$bdate[2],$bdate[0]);
	?>
	<table id="table">
		<tr>
			<td>Name : </td>
			<td><?php echo "$name"; ?></td>
		</tr>
		<tr>
			<td>Date of birth : </td>
			<td><?php echo "$b_date"; ?></td>
		</tr>
		<tr>
			<td>Age : </td>
			<td><?php age_count($bdate,$pdate); ?></td>
		</tr>
		<tr>
			<td>Next birthday : </td>
			<td>
				<?php
					$days_remain=remain_days($bdate,$pdate);
					if ($days_remain<=30)
						echo "<div id='color'>".$days_remain." days remaining for your next birthday...</div>";
					else
						echo $days_remain." days remaining for your next birthday...";
				?>
			</td>
		</tr>
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
		$years=$daysinmk/(365*24*60*60);

		$monthsinmk=$daysinmk%(365*24*60*60);
		$months=$monthsinmk/(30*24*60*60);
		if ($years < 0) 
			echo "<br>Enter correct date";
		else
			echo floor($years)." Years ".floor($months)." Months<br>";
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