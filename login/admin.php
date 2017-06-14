<?php
session_start();
if(isset($_SESSION['username'])  && isset($_SESSION['password'])  ){
	if($_SESSION['username'] == 'admin' && $_SESSION['password'] == 123){
		echo 'Chào bạn '.$_SESSION['username'];
	}
	else{
		header('location:login.php');
	}
	
}
elseif(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
	if($_COOKIE['username'] == 'admin' && $_COOKIE['password'] == 123){
		echo 'Chào bạn '.$_COOKIE['username'];
		setcookie('username','admin',time()+120);
		setcookie('password',123,time()+120);

	}
	else{
		header('location:login.php');
	}
	
}

else{
	header('location:login.php');
}


?>
<br>
<br>
<a href="dangxuat.php">Đăng xuất</a>