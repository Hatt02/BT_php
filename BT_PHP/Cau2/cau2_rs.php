<?php
	if (isset($_GET['inputNumber'])) {
		if(empty($_GET['inputNumber'])) {
	        echo "Bạn không được bỏ trống";
	    }else{
	        $number = $_GET['inputNumber'];
	        $tong = 0;
	        for ($i = 0; $i < $number; $i++) {
	        	$tong += $i;
	        }

	        echo "Tong la: " . $tong;
	    }
	}