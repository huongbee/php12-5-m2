<?php

function chao($ten,$tuoi){/////
	return "chào bạn $ten. Năm nay bạn $tuoi tuổi";
}



$ten = 'Khoa Phạm';
echo chao($ten, 30);//////
echo "<br>";

function SO(&$number){
	$number = $number-(-1);
	return $number;
}

$so = 12;
echo SO($so); 

echo $so;
echo '<br>';


function kiemtraSoNguyenTo($a){ //25 
	for($i=2;$i<=sqrt($a);$i++){ //5
		if($a%$i==0){
			return false;
		}
	}
	return true;
}


$chuoi = '';
$n=20;
for($i=2;$i<$n; $i++){
	if(kiemtraSoNguyenTo($i)){
		$chuoi .=$i.' ' ;
	}
}
echo $chuoi." là các số nguyên tố bé hơn $n";

echo '<br>';

function tinh_tich($start , $end){
	$tich = 1;
	for($i=$start; $i<=$end;$i++){
		$tich*=$i;
	}
	return $tich;
}

function tinh_tong($start , $end){
	$tich = 0;
	for($i=$start; $i<=$end;$i++){
		$tich+=$i;
	}
	return $tich;
}



echo tinh_tich(4,6);
echo '<br>';
echo tinh_tong(4,6);



function so_thich($mon_an=""){
	echo "Bạn thích món $mon_an";
}
so_thich();



///Build-in function
//hàm toán học

echo round(61.44555,2); //61.46
echo '<br>';
echo round(sqrt(11),2);

//hàm chuỗi
echo '<br>';
echo mb_strlen('ạ');
echo '<br>';

$chuoi1 = "Chào cả lớp";
$chuoi2 = "cả";
echo strpos($chuoi1, $chuoi2); //6
echo '<br>';

echo str_replace($chuoi1, "<span style='color:red'>$chuoi1</span>", $chuoi1);


var_dump(Checkdate(6,31,2017));

date_default_timezone_set('Asia/Ho_chi_minh');

echo Date("d/m/Y h:i:s") ;
print_r(Getdate());




$date = '2017/6/3 5:5:5';
echo date('d/m/Y h:i:s', strtotime($date));

echo '<br>';echo '<br>';echo '<br>';echo '<br>';

function get_Date($day, $month,$year){
	$d = cal_to_jd(CAL_GREGORIAN, $month, $day, $year);
	$d = jddayofweek($d,0);
	switch ($d) {
		case 6:
			$thu = 'Thứ bảy';
			break;
		case 5:
			$thu = 'Thứ sáu';
			break;
		case 4:
			$thu = 'Thứ năm';
			break;
		case 3:
			$thu = 'Thứ tư';
			break;
		case 2:
			$thu = 'Thứ ba';
			break;
		case 1:
			$thu = 'Thứ hai';
			break;
		case 0:
			$thu = 'chủ nhật';
			break;
	}
	return $thu;

}
echo get_Date(20,06,2017);



?>