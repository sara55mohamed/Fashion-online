<?php
			$dsn = 'mysql:host=localhost;dbname=fashiononline';
			$users  = 'root';
			$pass = '';
	$option = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
	);

	try {
		$connect = new PDO($dsn, $users , $pass, $option);
		$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	catch(PDOException $e) {
		echo 'Failed To Connect' . $e->getMessage();
	}  
?>

<?php
// $connect = mysql_connect("localhost","root","");
// if ($connect==false) {
// 	# code...
// 	die("error");
// }

// $r=mysql_select_db("fashiononline");
// if ($r==false) {
// 	# code...
// 	die("error");
// }
?>