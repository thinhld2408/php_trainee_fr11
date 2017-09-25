<?php
	$trainee = new Pagination;
	if(isset($_GET['page'])){
		$page = $_GET['page'];
	}
	else{
		$page = 1;
	}
	$trainee->setPage($page);
	$trainee->setRowPerPage(5);
	$trainee->setPerRow();
	$row_per_page = $trainee->getRowPerPage();
	$per_row = $trainee->getPerRow();
	$sql = "SELECT * FROM trainee LIMIT $per_row, $row_per_page";
	$trainee->query($sql);
/////////////////////////////////////////////////////////////////
	$pagination = new Pagination;
    $pagination->setPage($page);
    $pagination->setRowPerPage(5);
    $pagination->setTotalRow("SELECT * FROM trainee");
    $pagination->setTotalPage();
    $filename = 'index.php?controller=listed&page';
    $pagination->library($filename);
	include_once('views/users/listed.php');

	// class st {
	// 	public function getLibary(){
	// 		require library.php;
			
	// 	}
	// }
?>