<?php  
	function __autoload($filename){
		switch ($filename) {
			case 'Database':
				include_once('Database.php');
				break;
			case 'Pagination':
				include_once('Pagination.php');
				break;
			default:
				include_once('models/users/User.php');
				break;
		}
	}
?>