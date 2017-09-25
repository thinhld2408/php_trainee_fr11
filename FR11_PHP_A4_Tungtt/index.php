<?php
ob_start();
session_start();
include_once('library/__autoload.php');
if(isset($_GET['controller'])){
	switch ($_GET['controller']) {
		case 'create':
			include_once('controllers/users/create.php');
			break;
		case 'edit':
			include_once('controllers/users/edit.php');
			break;
		case 'del':
			include_once('controllers/users/del.php');
			break;
		default:
			include_once('controllers/users/listed.php');
			break;
	}
} else {
	include_once('controllers/users/listed.php');
}
?>