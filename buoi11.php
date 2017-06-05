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



$mangsp = array(
				array("TenSP"=>"IPhone 5","Hinh"=>"iphone5.jpg","Gia"=>3000000),
				array("TenSP"=>"IPhone 6","Hinh"=>"iphone6.jpg","Gia"=>4000000),
				array("TenSP"=>"IPhone 7","Hinh"=>"iphone7.jpg","Gia"=>5000000),
				array("TenSP"=>"IPhone 8","Hinh"=>"iphone8.jpg","Gia"=>6000000),
				array("TenSP"=>"IPhone 9","Hinh"=>"iphone9.jpg","Gia"=>7000000)
			);

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

	<?php
	// foreach($mangsp as $sanpham){
	// 	echo '<div class="sanpham">
	// 			<div class="hinh">
	// 				<img src="image/'.$sanpham['Hinh'].'">
	// 			</div>
	// 			<div class="ten">'.$sanpham['TenSP'].'</div>
	// 			<div class="gia">'.$sanpham['Gia'].'</div>
	// 		</div>';
	// }




	foreach($mangsp as $sanpham){
	?>

	<div class="sanpham">
		<div class="hinh">
			<img src="image/<?=$sanpham['Hinh']?>">
		</div>
		<div class="ten"><?=$sanpham['TenSP']?></div>
		<div class="gia"><?=number_format($sanpham['Gia'])?></div>
	</div>

	<?php
	}

	?>

	
	

</div>



</body>
</html>