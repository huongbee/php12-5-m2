<?php

$a = 18;//int
$b = '18'; //string

echo "Phần dư của số $a chia $b là: ".($a%$b).'<br>';

// $a--;
// echo $a;
// $a *=$b; //$a = $a + $a;
// echo $a.'<br>'; 


// if($a==$b || $a>$b){
// 	echo $a<$b;	
// }
// else{
// 	echo "hai số bằng nhau";
// }


if(isset($a)){echo "Đã có a"; } else{echo 'Chưa có a';}



//if($a==$b){echo "a=b"; } else{echo 'a<>b';}
echo (isset($a))?"Đã có a<br>":"chưa có a<br>";




switch(3){
	case 1: echo "Tháng Một"; 
		break;
	case 2: echo "Tháng Hai"; 
		break;
	case 3: echo "Tháng Ba"; 
		break;
	case 12: echo "Mười Tám"; 
		break;
	default : echo "Không phải 18 mà cũng ko phải 1";
		break;
}

echo '<br>';

//$i+=2; //$i=$i+2

for($i=0;$i<10;$i+=2){
	echo $i.'<br>';
	die;
}

?>