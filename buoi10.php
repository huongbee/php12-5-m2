<?php

$array = array('PHP','iOS','Android','NodeJS');

//echo $array[2];

//print_r($array);
$dem = count($array); //4

// for($i=0;$i<$dem;$i++){
// 	echo $array[$i].'<br>';
// }

/*
foreach($array as $key => $arr){
	echo $key. ': '.$arr.'<br>';
}


$i = 0;
$tich = 1;
while ($i < 10) {
	$i++;
	$tich = $tich*$i;
}
echo $tich;

echo '<br>';
$tong = 0;
for($t = 0; $t<10;$t++){
	$tong +=$t; //$tong = $tong + $t
}
echo $tong;
echo '<br>';




$i = 0;
$tong = 0;
do{
	//công việc
	$tong+=$i;
	$i++;
}
while($i<10);
echo $tong;


$year = 2000;
switch ($year%10) {
	case 0:
		$can = 'Canh ';
		break;
	
	case 1:
		$can = 'Tân ';
		break;
	case 2:
		$can = 'Nhâm ';
		break;
	case 3:
		$can = 'Quý ';
		break;
	case 4:
		$can = 'Giáp ';
		break;

	case 5:
		$can = 'Ất ';
		break;
	case 6:
		$can = 'Bính ';
		break;
	case 7:
		$can = 'Đinh ';
		break;
	case 8:
		$can = 'Mậu ';
		break;
	case 9:
		$can = 'Kỷ ';
		break;
}

switch ($year%12) {
	case 0:
		$chi = 'Thân ';
		break;
	
	case 1:
		$chi = 'Dậu ';
		break;
	case 2:
		$chi = 'Tuất ';
		break;
	case 3:
		$chi = 'Hợi ';
		break;
	case 4:
		$chi = 'Tí ';
		break;

	case 5:
		$chi = 'Sửu ';
		break;
	case 6:
		$chi = 'Dần ';
		break;
	case 7:
		$chi = 'Mẹo ';
		break;
	case 8:
		$chi = 'Thìn ';
		break;
	case 9:
		$chi = 'Tị ';
		break;
	case 10:
		$chi = 'Ngọ ';
		break;
	case 11:
		$chi = 'Mùi ';
		break;
}
echo $can.$chi;

*/




$str = "Hello World!";

$arr = explode(' ', $str); //mảng

//echo $arr[0]. ' ' .$arr[1];

//echo implode('-',$arr);

for($i=0;$i<2;$i++){
	if($arr[$i]=='World!'){
		$arr[$i] = "Friend";
	}
}


echo implode(' ',$arr);;

?>