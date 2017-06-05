<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Menu</title>
	<link rel="stylesheet" href="">
</head>
<style>
body{
	background-color: #f3f3f3;
	margin: 0px; 
	padding:0;
}
li{
	list-style-type: none;
	float: left;
	width: 100px;
	background-color: red;
	color: #fff;
	text-transform: uppercase;
	padding:10px 20px;
	border-left: 1px solid #fff;
	font-weight: 600
}
.container{
	width: 966px;
	display: block;
	margin:0 auto;
}
.sanpham{
	width: 300px;
	float: left;
	background-color: #fff;
	margin: 10px 10px;
	border: 1px solid #000
}
.sanpham img{
	height: 250px;	
	padding:10px 40px;
}
.ten{
	color: red;
	font-weight: bold;
	padding:20px 10px 10px 10px;	
	text-align: center;
	font-size: 20px
}
.gia{
	font-weight: bold;
	padding:20px 10px 10px 10px;
	text-align: center;	
	font-size: 20px
}


</style>

<?php

$menu = array('Trang chủ','Giới thiệu','Sản phẩm','Liên hệ','Đăng kí', 'Đăng nhập','Thể thao');


?>


<body>
<!-- 	<ul>

	<?php
	//foreach($menu as $mn){
	
	?>

		<li><?=$mn?></li>


	<?php

	//}

	?>


	</ul> -->



<div class="container">
	<div class="sanpham">
		<div class="hinh">
			<img src="image/iphone5.jpg">
		</div>
		<div class="ten">Iphone 7</div>
		<div class="gia">10.000.000</div>
	</div>
	<div class="sanpham">
		<div class="hinh">
			<img src="image/iphone5.jpg">
		</div>
		<div class="ten">Iphone 7</div>
		<div class="gia">10.000.000</div>
	</div>
	<div class="sanpham">
		<div class="hinh">
			<img src="image/iphone5.jpg">
		</div>
		<div class="ten">Iphone 7</div>
		<div class="gia">10.000.000</div>
	</div>
	<div class="sanpham">
		<div class="hinh">
			<img src="image/iphone5.jpg">
		</div>
		<div class="ten">Iphone 7</div>
		<div class="gia">10.000.000</div>
	</div>
</div>



</body>
</html>