<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="Menu-Ngang.css"/>
    <title>Tạo Menu Con Cấp 1 Và Menu Con Cấp 2</title>
</head>

<body>
<?php 
	$menu = array("Thời sự","Kinh Doanh","Bóng Đá","Thời trang","Công nghệ");
	
	//=== Hàm Tạo Menu Start ===
	function menu($menu){
		$xhml = '<ul class="menu">';
		foreach($menu as $key => $value){
			$xhml .='<li>'.$value.'</li>';
		}
		$xhml .='</ul>';
		return $xhml;	
	}
	//=== Hàm Tạo Menu End ===
	
	array_splice($menu,1,0,"Kinh Tế Vĩ Mô");
	array_splice($menu,6,0,"Sống Khỏe");
	$kq = menu($menu);
	
?>
    <div class="navigation">
        <?php 
			echo $kq;
		?>
    </div>
</body>
</html>
