<?php
session_start();


$_SESSION['username'] = 'khoapham';

//echo $_SESSION['username'];
unset($_SESSION['username']); //xóa 1 session
session_destroy();



// setcookie('username','khoapham',time()+120); //2p tạo cookie
// echo 'đã set cookie';

// setcookie('username','khoapham',time()-120); //2p tạo cookie
// //8:30

// //8:32


?>