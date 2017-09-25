<?php
	include_once('library/Database.php');  
	
	class Trainee extends Database{
		protected $_id = null;
		protected $_name = null;
		protected $_email = null;
		protected $_address = null;
		protected $_phone = null;
		protected $_gender = null;
		protected $_country = null;
		
		function __construct(){
			$this->connect();
		}
		
		public function setId($id){
			$this->_id = $id;
		}
		
		public function setName($name){
			$this->_name = $name;
		}
		
		public function setEmail($email){
			$this->_email = $email;
		}
		
		public function setAddress($address){
			$this->_address = $address;
		}
		
		public function setPhone($phone){
			$this->_phone= $phone;
		}
		
		public function setGender($gender){
			$this->_gender = $gender;
		}

		public function setCountry($country){
			$this->_country = $country;
		}

		public function create(){
			$sql = "SELECT * FROM trainee WHERE email = '$this->_email'";
			$this->query($sql);
			
			if($this->numRows() > 0){
				return "Trainee exits";
			} else {
				$sql = "INSERT INTO trainee (name,email,address,phone,gender,country) 
						VALUES ('$this->_name',
								'$this->_email',
								'$this->_address',
								'$this->_phone',
								'$this->_gender',
								'$this->_country')";
				$this->query($sql);
			}
		}
		
		public function edit(){
			$sql = "SELECT * FROM trainee WHERE email ='$this->_email' AND id != '$this->_id'";
			$this->query($sql);
			if($this->numRows() > 0){
				return 'Email exits';
			}
			else {
				$sql = "UPDATE trainee SET 
					name = '$this->_name',
					email = '$this->_email',
					address = '$this->_address',
					phone = '$this->_phone',
					gender = '$this->_gender',
					country = '$this->_country'
					WHERE id = '$this->_id'";
				$this->query($sql);
			}
		}

		public function del(){
			$sql = "DELETE FROM trainee WHERE id ='$this->_id'";
			$this->query($sql);
		}

		public function formValidate($name, $email, $address, $phone, $gender, $country)
		{ 
	    	if (!preg_match(' /^[a-zA-Z0-9_ ]{2,}$/ ', $name)){
	    		return false; 
	    	
	    	} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	    		return false;
	    	
	    	} elseif (!preg_match(' /^[0-9]{10,11}$/ ', $phone)) {
	    		return false;
	    	
	    	} else {
	    		$this->_name = $name;
	    		$this->_email = $email;
	    		$this->_address = $address;
	    		$this->_phone = $phone;
	    		$this->_gender = $gender;
	    		$this->_country = $country;
	    		return true;
	    	}
	    	return false;
	    }
	}
	
?>