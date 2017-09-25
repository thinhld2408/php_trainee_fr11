<?php
if(isset($_POST['submit'])){
	if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['gender']) || empty($_POST['country'])) {
		$_SESSION['error'] = 'Vui lòng điền đầy đủ thông tin';
	} else {
		$trainee = new Trainee;
		$trainee->setName($_POST['name']);
		$trainee->setEmail($_POST['email']);
		$trainee->setAddress($_POST['address']);
		$trainee->setPhone($_POST['phone']);
		$trainee->setGender($_POST['gender']);
		$trainee->setCountry($_POST['country']);
		if (!$trainee->formValidate($_POST['name'], $_POST['email'], $_POST['address'], $_POST['phone'], $_POST['gender'], $_POST['country'])){
			$_SESSION['error'] = 'Lỗi nhập form';
		} elseif ($trainee->create() == 'Trainee exits') {
			$_SESSION['error'] = 'Trainee đã tồn tại';
		} else {
			$_SESSION['success'] = 'Thêm mới thành công';
			header('location:index.php?controller=listed');
		}
	}
}  
	include_once('views/users/create.php');
?>