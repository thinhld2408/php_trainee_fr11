<?php
	session_start();
	$id = $_GET['id'];
	$trainee = new Trainee;
	$trainee->setId($id);
	$trainee->del();
	$_SESSION['success'] = 'Xóa thành công';
	header('location:index.php?page_layout=listed');
?>