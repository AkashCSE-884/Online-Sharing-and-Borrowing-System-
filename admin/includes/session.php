<?php
	include '../includes/conn.php';
	session_start();

	if(!isset($_SESSION['Super_admin']) || trim($_SESSION['Super_admin']) == ''){
		header('location: ../index.php');
		exit();
	}

	$conn = $pdo->open();

	$stmt = $conn->prepare("SELECT * FROM usertable WHERE id=:id");
	$stmt->execute(['id'=>$_SESSION['Super_admin']]);
	$admin = $stmt->fetch();

	$pdo->close();

?>