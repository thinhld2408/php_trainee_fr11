<?php 
	$id = $_GET['id'];
	$trainee = new Trainee;
	$sql = "SELECT * FROM trainee WHERE id = $id";
	$trainee->query($sql);
	$fetch = $trainee->fetchArray();
	/////////////////////////////////////////////////
	if(isset($_POST['submit'])){
		if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['gender']) || empty($_POST['country'])) {
			$_SESSION['error'] = 'Vui lòng điền đầy đủ thông tin';
		} else {
			$trainee->setId($id);
			$trainee->setName($_POST['name']);
			$trainee->setEmail($_POST['email']);
			$trainee->setAddress($_POST['address']);
			$trainee->setPhone($_POST['phone']);
			$trainee->setGender($_POST['gender']);
			$trainee->setCountry($_POST['country']);
			if (!$trainee->formValidate($_POST['name'], $_POST['email'], $_POST['address'], $_POST['phone'], $_POST['gender'], $_POST['country'])){
			$_SESSION['error'] = 'Lỗi nhập form';
			} elseif($trainee->edit() == 'Email exits'){
				$_SESSION['error'] = 'Email đã tồn tại';
			} else {
				$_SESSION['success'] = 'Sửa thành công';
				header('location:index.php?controller=listed');
			}
		}
	}
	include_once('views/users/edit.php');
?>