<?php
	function ErrorInput($value){
		$error='';
		if(trim($value) == ''){
			$error = '<p class="error">Giá trị không được rỗng </p>';
		}else if(is_numeric($value) == false){
			$error = '<p class="error">Giá trị phải là một con số</p>';	
		}
		return $error;
	}
	function chuyenDay($thang, $ngay, $nam){
		date_default_timezone_set('Asia/Ho_chi_minh');
		$date = $thang.'/'.$ngay.'/'.$nam;
		$thu = getDate(strtotime($date));
		return $thu['weekday'];
	}
	
?>