<?php
	require 'config.php';
 
	class db_class{
		public $host = db_host;
		public $user = db_user;
		public $pass = db_pass;
		public $dbname = db_name;
		public $conn;
		public $error;
 
		public function __construct(){
			$this->connect();
		}
 
		private function connect(){
			$this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
			if(!$this->conn){
				$this->error = "Fatal Error: Can't connect to database".$this->conn->connect_error;
				return false;
			}
		}
 
		public function save($first_name, $last_name, $email,  $username, $password){
			$stmt = $this->conn->prepare("INSERT INTO `visitor_table` (first_name, last_name, email,  username, password) VALUES( ?, ?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("sssss", $first_name, $last_name, $email,  $username, $password);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}
		public function login($username, $password){
			$stmt = $this->conn->prepare("SELECT * FROM `visitor_table` WHERE `username` = '$username' && `password` = '$password'") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				$valid = $result->num_rows;
				$fetch = $result->fetch_array();
				return array(
					'user_id'=> $fetch['user_id'],
					'count'=>$valid
				);
			}
		}
 
		public function user_account($user_id){
			$stmt = $this->conn->prepare("SELECT * FROM `user` WHERE `user_id` = '$user_id'") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				$fetch = $result->fetch_array();
				return array(
					'first_name'=> $fetch['first_name'],
					'last_name'=>$fetch['last_name']
				);
			}	
		}
	}	
	