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

	//ktr here
	foreach($file['size'] as $size){
		if($size>1000*1024){
			echo "File quá lớn";
			die;
		}

	}
	$array_ext = array('png', 'gif', 'jpeg','jpg','PNG');
	foreach($file['name'] as $name){
		$ext = pathinfo($name, PATHINFO_EXTENSION );
		if(!in_array($ext, $array_ext)){
			echo "File không được phép";
			die;
		}


	}


	//

	foreach($file['name'] as $key =>$value){
		$base_name = pathinfo($value, PATHINFO_FILENAME);
		$ext = pathinfo($value, PATHINFO_EXTENSION );
		move_uploaded_file($file['tmp_name'][$key], 'image/'.$base_name.time().rand(999,99999).'.'.$ext);
	}
	//print_r($file); die;



	//echo $file['size']; die;

	///$filename = $file['name'];
	

//kiểm tra filesize
	// if($file['size']<700*1024){ //700kb
	// 	echo "file thỏa mãn";

	// 	// chỉ cho phép upload file hình (.jpg, .png, .gif, .jpeg)
	// 	//$base_name = pathinfo($filename, PATHINFO_FILENAME); //lấy tên file
	// 	///$ext = pathinfo($filename, PATHINFO_EXTENSION );  //lấy đuôi file
	// 	//echo $ext ; //php
	// 	//$path = 'image/'.$base_name.'.'.$ext;


	// 	$vitri = strripos($filename,'.'); //trả về vị trí cuối của chuỗi tìm thấy
	// 	//echo $vitri;
	// 	$ext = substr($filename,$vitri); //.jpg
	// 	$array_ext = array('.jpg', '.png', '.gif', '.jpeg');
	// 	if(in_array($ext, $array_ext)){
	// 		$base_name = substr($filename,0,$vitri).time().rand(999,99999);
	// 		$path = 'image/'.$base_name.$ext;
	// 		move_uploaded_file($file['tmp_name'], $path);

	// 		echo 'thành công';
	// 	}
	// 	else{
	// 		echo "Không được phép chọn file này";
	// 	}



	// 	////đổi tên file

	// }
	// else{
	// 	echo "File quá lớn";
	//}





// upload muliple file

	
}


?>

	<form method="POST" enctype="multipart/form-data">
		<input type="file" name="hinh[]" multiple>
		<button type="submit" name="btnUpload">Upload File</button>
	</form>
</body>
</html>