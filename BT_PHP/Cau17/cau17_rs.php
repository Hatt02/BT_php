<!-- Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không. -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		function Palindrome($string) {  
		  if ($string == strrev($string))  
				echo "Chuỗi " . $string . " là chuỗi Palindrome.";
		  else
				echo "Chuỗi " . $string . " không phải là chuỗi Palindrome.";
		}

		if (isset($_GET['inputString'])) {
			if(empty($_GET['inputString'])) {
		        echo "Bạn không được bỏ trống";
		    }else{
		        $number = $_GET['inputString'];
		        
		        Palindrome($number);
		    }
		}
	?>
	<a href="cau17.php">Quay lại</a>
</body>
</html>