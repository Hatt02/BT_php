<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		function check($n){
			$sum = 0;//khai bao biem sum
			for($i=1;$i<=$n/2;$i++){
				if($n%$i==0) 
				$sum+=$i;
			}
			if($sum==$n) return true; // tra ve true
			return false;
		}

		if (isset($_GET['inputNumber'])) {
			if(empty($_GET['inputNumber'])) {
		        echo "Bạn không được bỏ trống";
		    }else{
		        $number = $_GET['inputNumber'];
		        
		        if (check($number)) {
		        	echo "Số " . $number . " là số hoàn hảo";
		        }
		    }
		}
	?>
</body>
</html>