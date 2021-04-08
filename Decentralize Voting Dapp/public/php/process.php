<?php  
	$name = $_POST['name'];
	$nid = $_POST['nid'];
	$bid = $_POST['bid']; 
	if($name && $nid && $bid){
		$hostname='localhost';
		$user = 'root';
		$password = '';
		$mysql_database = '124';
		$db = mysqli_connect($hostname, $user, $password,$mysql_database) or die(mysqli_error());
		mysqli_select_db( $db, $mysql_database) or die(mysqli_error());
		
		$sql = "SELECT * FROM voter WHERE name ='$name' AND nid='$nid' AND bid='$bid';";
		$qry = mysqli_query($db,$sql) or die(mysqli_error()); 
		if($row = mysqli_fetch_object($qry)){ 
			@session_start();
			$_SESSION['voter'] = $row->key; 
			header('Location: profile.php');
		}else{
			header('Location: login.php');
		}
	}else{
		header('Location: login.php');
	}
?>