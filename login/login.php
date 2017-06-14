<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</head>
<body>
	
<?php
if(isset($_POST['login'])){
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['password'] = $_POST['password'];
	

	if(isset($_POST['remember']) && ($_POST['remember'] == 'on' || $_POST['remember'] == 1)){
		setcookie('username','admin',time()+120);
		setcookie('password',123,time()+120);
		header('location:admin.php');
	}

	elseif($_SESSION['username'] == 'admin' && $_SESSION['password'] == 123){
		//login thành công
		header('location:admin.php');
	}
	else{
		//login thất bại
		$loi = 'Sai thông tin đăng nhập';

	}
}


?>


	<div class="container">
		<div class="col-md-4"></div>
		<div class="col-md-4">
		<h2>Đăng nhập</h2>
			<form method="POST">
			  <div class="form-group">
			    <label for="email">Username: </label>
			    <input type="text" class="form-control" name="username">
			  </div>
			  <div class="form-group">
			    <label for="pwd">Password:</label>
			    <input type="password" class="form-control" name="password">
			  </div>
			  <div class="checkbox">
			    <label><input type="checkbox" name="remember"> Remember me</label>
			  </div>
			  <button type="submit" class="btn btn-success" name="login">Login</button>
			</form>
			<br>
			<?php
			if(isset($loi)){
			?>
			<div class="alert alert-danger"><?=$loi?></div>
			<?php
			}
			?>
		</div>
		<div class="col-md-4"></div>
	</div>

	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" ></script>
</body>
</html>