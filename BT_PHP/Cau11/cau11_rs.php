<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		function Armstrong($n) {
			$sum = 0;
			$rem;
			$num = $n;
			while ($num != 0)
		   {
		      $rem = $num % 10;
		      $sum = $sum + ($rem*$rem*$rem);
		      $num = $num / 10;
		   }
		   if($n == $sum)
		      echo $n . " là số Armstrong";
		   else
		      echo $n . " không phải là số Armstrong";
		}

		if (isset($_GET['inputNumber'])) {
			if(empty($_GET['inputNumber'])) {
		        echo "Bạn không được bỏ trống";
		    }else{
		        $number = $_GET['inputNumber'];
		        
		        Armstrong($number);
		    }
		}
	?>
	<br>
	<a href="cau11.php">Quay lại</a>
</body>
</html>