<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Danh Sách Sản Phẩm</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>

<body>
	<?php 
		require_once('ListSP.php');
		$arrSP = array(
			"1" => array(
				"TenSP"  => "Galaxy Note 1",
				"HinhSP" => "Galaxy Note 1.jpg",
				"GiaSP"  => "3.000.000đ"
			),
			"2" => array(
				"TenSP"  => "Galaxy Note 2",
				"HinhSP" => "Galaxy Note 2.jpg",
				"GiaSP"  => "4.000.000đ"
			),
			"3" => array(
				"TenSP"  => "Galaxy Note 3",
				"HinhSP" => "Galaxy Note 3.jpg",
				"GiaSP"  => "5.000.000đ"
			),
			"4" => array(
				"TenSP"  => "Galaxy Note 4",
				"HinhSP" => "Galaxy Note 4.jpg",
				"GiaSP"  => "6.000.000đ"
			),
			"5" => array(
				"TenSP"  => "Galaxy Note 5",
				"HinhSP" => "Galaxy Note 5.jpg",
				"GiaSP"  => "7.000.000đ"
			),
			"7" => array(
				"TenSP"  => "Galaxy Note 7",
				"HinhSP" => "Galaxy Note 7.jpg",
				"GiaSP"  => "8.000.000đ"
			),
		);
		$GalaxyNote = listSP($arrSP);
	?>
    <div class="container">
        <?php 
			echo $GalaxyNote;
		?>
    </div>
</body>
</html>
