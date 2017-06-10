<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kiểm Tra dữ liệu nhập vào</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
<?php
	require_once('functions.php');
	//==== KHAI BÁO BIẾN ====
	$ngay	 	  = '';
	$thang		 = '';
	$nam	  	   = '';
	$erorNgay 	  = '';
	$errorThang	= '';
	$errorNam 	  = '';
	$date 		  = '';
	
	if(isset($_POST["ngay"]) && isset($_POST["thang"]) && isset($_POST["nam"]) ){
		$ngay 	= $_POST["ngay"];
		$thang   = $_POST["thang"];
		$nam 	 = $_POST["nam"];
		$date	= $ngay.'/'.$thang.'/'.$nam;
		//====== Kiểm Tra Lỗi =======
		$erorNgay	 = ErrorInput($ngay);
		$errorThang   = ErrorInput($thang);
		$errorNam 	 = ErrorInput($nam);
		
		//====== Lấy Thứ =======
		$thu = chuyenDay($thang, $ngay, $nam);
		$flag = false;
		if (checkdate((int)$thang,(int)$ngay,(int)$nam)){
			$flag = true;
		}
	}
?>
    <div class="content">
    	<h1>Kiểm Tra Ngày Tháng</h1>
        <form name="main-form" action="#" method="post">
        	<div class="row">
            	<span>Ngày</span>
                <input type="text" name="ngay" value="<?php echo $ngay; ?>" placeholder="Nhập ngày" />
                <?php echo $erorNgay?>
            </div>
            <div class="row">
            	<span>Tháng</span>
                <input type="text" name="thang" value="<?php echo $thang; ?>" placeholder="Nhập Tháng"/>
                <?php echo $errorThang ?>
            </div>
            <div class="row">
            	<span>Năm</span>
                <input type="text" name="nam" value="<?php echo $nam; ?>" placeholder="Nhập Năm"/>
                <?php echo $errorNam ?>
            </div>
            <div class="row">
                <input type="submit" name="submitForm" id="submitForm" value="Kiểm Tra" />
            </div>
        </form>
    </div>
    	<?php 
		if(!empty($_POST)){
			if ($flag == true){
		?>
					<h2>Ngày <?=$date?> là thứ <?=$thu?> trong tuần</h2>		
		<?php
			}else{
		?>
			<h2>Không hợp lệ</h2>	
        <?php
			}}
		?>
        	
     	

</body>
</html>