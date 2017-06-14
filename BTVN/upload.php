<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Upload File</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<h1> Upload file ảnh , nhỏ hơn 2MB</h1>
	<form method="POST" enctype="multipart/form-data">
	Filename:
	<input type="text" name="file_name" placeholder="Nhap ten File"><br>
	Upload Photo:
	<input type="file" name="hinh_anh"><br>
	<button type="submit" name="submit">Submit</button>
	</form>

<?php
if(isset($_POST["submit"])) {
	$pic = $_FILES["hinh_anh"];
	// check file anh //
	$check= getimagesize($pic["tmp_name"]);
	if (($check !== false ) && ($pic["size"]< 2*pow(2,10)*pow(2,10))) {
		$path='images/';
		
		// Thay doi ten file //
		if ($_POST["file_name"]=='') {
			$new_name= $pic["name"];			
		}
		else {
			$extension= explode("/",$pic["type"]);
			$new_name=$_POST["file_name"].'.'.$extension[1];
		}
		
		$location="$path"."$new_name";
		move_uploaded_file($pic["tmp_name"],$location);
		?>
		<h2> File ảnh đã upload </h2>
		<h3> Path: <?=$location?> </h3>
		<img  width="400px " src="http://localhost/hocphp125/buoi12/<?=$location?>">
		<?php
	}
	else 
		echo 'Không phải file ảnh hoặc file ảnh lớn hơn 2MB';



//print_r($pic);

//echo $location;
	//$image = getimagesize($pic["tmp_name"]);
//print_r($image);	
	
}
?>

</body>
</html>