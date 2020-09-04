<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Operations</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
   include '../menubar/menu.html';
?>
<div style="padding-top: 75px;">
<div id="container">
  <div id="box">
   <center>
  <?php
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];
    $choice = $_POST['op'];
    $roundstatus=$_POST['roundstatus'];
    echo "Number1 = ".$num1."<br>";
    echo "Number2 = ".$num2."<br>";
    switch ($choice) 
      {
        case '+':
          $sum = $num1 + $num2;
            echo "$num1 + $num2 = $sum";
          break;
        case '-':
          $sum = $num1 - $num2;
          echo "$num1 - $num2 = $sum";
          break;
        case '*':
          $sum = $num1 * $num2;
          echo "$num1 * $num2 = $sum";
          break;
        case '/':
          $sum = $num1 / $num2;
          if ($roundstatus=='y')
          {
            $sum = round($sum);
            echo "$num1 / $num2 = $sum";
          }
          else
          {
            echo "$num1 / $num2 = $sum";
          }
          break;
        default:
          echo "No Choice";
          break;
      }
  ?>
</center>
</div>
</div>
</div>
<footer id="foot">
    - Created by 🅼onu 🅶upt🅰<br>
    (186450307027)
</footer>
</body>
</html>