<!DOCTYPE html>
<html>
<head>
	<title>baitapphp</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
	.main{
		background-color: #DF01D7;
		margin: auto;
		
		width: 100%;
		font-size: 14px;
		color: white;
	}
	.home{
		text-align: center;
		width: 30px;
		padding-top: 6px;
		height: 25px;
		margin-left: 4px;
		display: inline-block;
	}
	.menu{
		padding-top: 6px;
		width: 89px;
		height: 25px;
		text-align: center;
		border-left: 0.5px solid #FF00FF;
		display: inline-block;
	}
	.menu:hover{
		background-color: #F781F3;
	}
	.home:hover{
		background-color: #F781F3;
	}
	.content{
		width: 100%;
		height: 600px;
		background-color: #E2A9F3;
		margin: auto;
	}
	.sanpham{
		text-align: center;
		margin: 5px;
		margin-top: 10px;
		margin-left: 12px;
		width: 200px;
		height: 30%;
		border: 1px solid #888888;
		background-color: #fff;
		float: left;	
	}
	.hinh{
		margin-top: 10px;
		width: 150px;
		height: 110px;
	}
	.clgia{
		color: red;
	}
	.clgia:hover{
		color: #F78181;
	}
</style>
<body>
	<div class="main"><div class="home"><span class="fa fa-home fa-lg"></span></div>
		<?php
			$mang = array("Thoi Su","Kinh Doanh","Bong Da","Thoi Trang","Doi Song");
			array_push($mang, "Cong Nghe","Am Thuc");
			array_splice($mang,3,0, array("Giao Duc"));
			foreach ($mang as $value) {
				echo '<div class="menu">'.$value.'</div>';
			};

		?>
	</div>

	<div class=content>
	<?php

		$mangsp =  array(
			"1"=>array("TenSp"=>"Samsung Galaxy S8","Hinh"=>'<img class="hinh" src="img/samsung.png">',"Gia"=>"11.000.000"),
			"2"=>array("TenSp"=>"Samsung Galaxy S8","Hinh"=>'<img class="hinh" src="img/samsung.png">',"Gia"=>"12.000.000"),
			"3"=>array("TenSp"=>"Samsung Galaxy S8","Hinh"=>'<img class="hinh" src="img/samsung.png">',"Gia"=>"14.000.000"),
			"4"=>array("TenSp"=>"Samsung Galaxy S8","Hinh"=>'<img class="hinh" src="img/samsung.png">',"Gia"=>"15.000.000"),
			"5"=>array("TenSp"=>"Samsung Galaxy S8","Hinh"=>'<img class="hinh" src="img/samsung.png">',"Gia"=>"16.000.000"),
			"6"=>array("TenSp"=>"Samsung Galaxy S8","Hinh"=>'<img class="hinh" src="img/samsung.png">',"Gia"=>"17.000.000"),
			"7"=>array("TenSp"=>"Samsung Galaxy S8","Hinh"=>'<img class="hinh" src="img/samsung.png">',"Gia"=>"18.000.000"),
			"8"=>array("TenSp"=>"Samsung Galaxy S8","Hinh"=>'<img class="hinh" src="img/samsung.png">',"Gia"=>"19.000.000"),
			);

		
			foreach ($mangsp as $key => $value) {
				echo '<div class="sanpham" >'.$value["Hinh"].'<br>'.$value["TenSp"].'<br>'.'<a class="clgia">'.$value["Gia"].' Đ'.'</a>'.'</div>';
			
		}
		

	?>
	</div>
</body>
</html>