<?php
session_start();
session_destroy();
if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
	setcookie('username','admin',time()-120);
	setcookie('password',123,time()-120);
}
header('location:login.php');
?>