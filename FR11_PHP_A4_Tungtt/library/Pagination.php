<?php  
	include_once('Database.php');
	class Pagination extends Database{
		protected $_page = null;
		protected $_row_per_page = null;
		protected $_per_row = null;
		///////////////////////////////////////////////////////
		protected $_total_page = null;
		protected $_total_row = null;
		protected $_library = null;
		protected $_previous = null;
		protected $_next = null;
		function __construct(){
			$this->connect();
		}

		public function setPage($page){
			$this->_page = $page;
		}
		public function setRowPerPage($row_per_page){
			$this->_row_per_page = $row_per_page;
		}
		public function getRowPerPage(){
			return $this->_row_per_page;
		}
		public function setPerRow(){
			$this->_per_row = $this->_row_per_page*($this->_page - 1);
		}
		public function getPerRow(){
			return $this->_per_row;
		}
		////////////////////////////////////////////////////////
		public function setTotalRow(){
			$sql = "SELECT * FROM trainee";
			$this->query($sql);
			if($this->numRows() > 0) {
			$this->_total_row = $this->numRows();
			}
		}
		public function setTotalPage(){
			$this->_total_page = ceil($this->_total_row/$this->_row_per_page);
		}
		public function library($filename){
			$this->_previous = $this->_page - 1;
			if($this->_previous < 1){
				$this->_previous = 1;
			}
			$this->_library .='<li><a arial-label="previous" href="'.$filename.'='.$this->_previous.'"><span arial-hidden="true"><<</span></a></li>';
			for ($i=1; $i <= $this->_total_page ; $i++) { 
				if($i == $this->_page){
				//$page = null;
					$this->_library .= '<li class="active"><a href="#">'.$i.'</a></li>';
				}
				else {
				//$page !=Null;
					$this->_library .= '<li><a href="'.$filename.'='.$i.'">'.$i.'</a></li>';
				}
			}
			$this->_next = $this->_page + 1;
			if ($this->_next >= $this->_total_page) {
				$this->_next = $this->_total_page;
			}
			$this->_library .='<li><a arial-label="next" href="'.$filename.'='.$this->_next.'"><span arial-hidden="true">>></span></a></li>';
		}
		public function getLibrary(){
			return $this->_library;
		}
	}
?>