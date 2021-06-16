<?php
	include 'includes/conn.php';
	session_start();
     

	if(isset($_SESSION['Super_admin'])){
		header('location: admin/home.php');
	}
	if(isset($_SESSION['admin'])){
		header('location: shareable/products.php');
	}

	if(isset($_SESSION['user'])){
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("SELECT * FROM usertable WHERE id=:id");
			$stmt->execute(['id'=>$_SESSION['user']]);
			$user = $stmt->fetch();
			$_SESSION['useremail']=$user['email'];
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

		$pdo->close();
	}
?>