<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>FORM</title>
	<link rel="stylesheet" href="">
</head>
<body>

<?php

if(isset($_POST['btnGui'])){
	$a = $_POST['txtSoa'];
	$b = $_POST['txtSob'];
	$pt = $_POST['txtPheptinh'];
	if(is_numeric($pt)){
		$kq =  "Nhập + - * /";
		
	}
	
	if($a=='' || $b==''){
		$kq="Vui lòng nhập 2 số";
	}
	else{
		if(!is_numeric($a) || !is_numeric($b)){
			$kq = 'Nhập số';
		}
		else{
			if($pt=='+'){
				$kq = $a+$b;
			}
			elseif($pt=='-'){
				$kq = $a-$b;
			}
			elseif($pt=='*'){
				$kq = $a*$b;
			}
			elseif($pt=='/' && $b!=0){
				$kq = $a/$b;
			}
			else{
				$kq="Nhập lại phép tính";
			}
		}
	}
	
}

//isset($_POST['btnGui'])?$_POST['txtSoa']:'';
?>

	<form method="POST">
		Số a:
		<input type="text" name="txtSoa" placeholder="Nhập số a" value="<?=@$a?>">
		<br><br>
		Số b:
		<input type="text" name="txtSob" placeholder="Nhập số b" value="<?=@$b?>">
		<br><br>
		Phép tính:
		<input type="text" name="txtPheptinh" placeholder="Nhập phép tính" value="<?=@$pt?>">
		<br><br>
		Kết quả:
		<input type="text" name="txtKetqua" readonly value="<?=@$kq?>">
		<br><br>
		<button type="submit" name="btnGui">Gửi</button>
	</form>

<br><br><br><br><br><br>
<?php
if(isset($_POST['btnUpload'])){
	$file = $_FILES['hinh'];
	print_r($file); die;
	$filename = $file['name'];
	$path = 'image/'.$filename;
//kiểm tra filesize
//đổi tên file
// chỉ cho phép upload file hình (.jpg, .png, .gif, .jpeg)
// upload muliple file

	move_uploaded_file($file['tmp_name'], $path);
	echo 'thành công';
}


?>

	<form method="POST" enctype="multipart/form-data">
		<input type="file" name="hinh">
		<button type="submit" name="btnUpload">Upload File</button>
	</form>
</body>
</html>