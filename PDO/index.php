<?php
try{
	$dbh = new PDO('mysql:host=localhost;dbname=news_12_5', 'root', '');
	$dbh->exec('set names UTF8');


	// $dbh->exec('DELETE FROM users WHERE id=24');
	// echo 'thành công';
	//SELECT
	/*$sql = "SELECT * FROM theloai WHERE name like ? ";
	$stmt = $dbh->prepare($sql);

	$name = $_GET['name'];

	$result = $stmt->execute(array('%'.$name.'%')); //kiểm tra thành công hay ko
	
	if($result){
		while($row = $stmt->fetch(PDO::FETCH_LAZY)){
			print_r($row);
			//echo $row->name.'<br>';
		}
	}
	else{
		echo 'Lỗi';
	}*/
	//INSERT 

	//c1
	//$sql = $dbh->exec("INSERT theloai(name,alias,image) VALUES ('thể loại mới','1312','1.png')");

	//c2
	//$sql = $dbh->query("INSERT theloai(name,alias,image) VALUES ('thể loại mới','1312','1.png')");
	
	//C3
	/*$sql = "INSERT theloai(name,alias,image) VALUES (:name,:alias,:image)";
	$stmt = $dbh->prepare($sql);

	$stmt->bindParam(':name', $name);
	$stmt->bindParam(':alias', $alias);
	$stmt->bindParam(":image", $image);
	
	
	$name = $_GET['name'];
	$alias = $_GET['alias'];
	$image = $_GET['image'];

	$stmt->execute();*/
	//UPDATE
	/*$sql = "UPDATE theloai SET name = ? WHERE id=?";
	$stmt = $dbh->prepare($sql);

	$stmt->bindParam(1, $name);
	$stmt->bindParam(2, $id);
	
	$name = $_GET['name'];
	$id = $_GET['id'];

	$stmt->execute();*/

	//DELETE
	$sql = "DELETE FROM theloai WHERE id=?";
	$stmt = $dbh->prepare($sql);

	$stmt->bindParam(1, $id);
	
	$id = $_GET['id'];

	$stmt->execute();

	echo 'thành công';

	$dbh = null;

}catch(PDOException $e){
	//echo 'Lỗi: '. $e->getMessage();
	echo "Lỗi kết nối";
	die;
}



?>