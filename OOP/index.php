<?php

class SinhVien{
	public static $ten = 'Huong';
	public $MSSV;
	public $thongtin = array();

	// public function SinhVien(){
		
	// }
	// public function __construct(){
	// 	echo 'Đây là lớp cha';
	// }
	// public function __destruct(){
	// 	echo 'Lớp SinhVien đã bị hủy';
	// }


	public static function setTen($name){
		SinhVien::$ten = $name; //gán tên
		//$this->MSSV = $id;
	} 

	public static function getTen(){
		return SinhVien::$ten;// ngừng

		// $this->thongtin = array($this->ten,$this->MSSV);
		// return $this->thongtin;
		
		// return $this->MSSV;
	}

}


$sv = new SinhVien(); ///dt 1
$sv->setTen('Khoa');
echo $sv->getTen();


$sv2 = new SinhVien(); ///dt 1
$sv2->setTen('Khoa Pham');
echo $sv2->getTen();



echo $sv->getTen();


// class HocSinh extends SinhVien{
// 	// function __construct(){
// 	// 	echo 'Đây là lớp con';
// 	// }

// 	function getTen(){
// 		return parent::getTen();
// 	}
// }

// $hs = new HocSinh;
// //echo $hs->ten;
// echo $hs->getTen();


// $sv = new SinhVien(); ///dt 1
// echo $sv->ten; //lấy tên



// $sv->setTen('Khoa Phạm', '23456789');
// $result = $sv->getTen();
// print_r($result);




// $sv2 = new SinhVien(); //dt2
// $sv->setTen('Khoa Phạm 2');
// echo $sv->getTen();




abstract class LopHoc{

	abstract function test();
}

class HocSinh extends LopHoc{
	function test(){
		echo 'Đây là lớp con';
	}
}

?>