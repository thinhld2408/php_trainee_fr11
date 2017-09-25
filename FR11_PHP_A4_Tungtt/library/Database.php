<?php  
	class Database{
		protected $_dbHost = "localhost";
		protected $_dbUser = "root";
		protected $_dbPass = "";
		protected $_dbDatabase = "database_fr11";

		protected $_conn = null;
		protected $_result = null;
		protected $_num_rows = null;
		protected $_fetch_array = null;

		public function connect(){
			$this->_conn = mysqli_connect($this->_dbHost,$this->_dbUser,$this->_dbPass,$this->_dbDatabase);
			if($this->_conn){
				$set_lang = mysqli_set_charset($this->_conn, 'utf8');
				// echo "ket noi thanh cong".'<br />';
			}
			else{
				return 'unsuccessful';
			}
		}
		public function freeResult(){
			if($this->_result){
				mysqli_free_result($this->_result);
			}
		}
		public function query($sql){
			$this->freeResult();
			$this->_result = mysqli_query($this->_conn,$sql);
		}
		public function numRows(){
			$this->_num_rows = mysqli_num_rows($this->_result);
			return $this->_num_rows;
		}
		public function fetchArray(){
			$this->_fetch_array = mysqli_fetch_array($this->_result);
			return $this->_fetch_array;
		}
	}
?>