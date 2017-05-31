<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bàn cờ vua</title>
	<link rel="stylesheet" href="">
</head>
<style>
	
.banco{
	width:800px;
	background-color: blue;
	height: 800px;
	color: yellow
}
.oco{
	width: 100px;
	height: 100px;
	float: left;
}
.otrang{
	background-color: #fff
}
.oden{
	background-color: #000
}

</style>

<body>

	<div class="banco">
		<?php
		for($i=0;$i<8;$i++){
			for($j=0;$j<8;$j++){
				if(($i+$j)%2==0){
					echo "<div class='oco otrang'>$i+$j</div>";
				}
				else{
					echo "<div class='oco oden'>$i+$j</div>";
				}
			}
			
		}
		?>
		
	</div>
</body>
</html>