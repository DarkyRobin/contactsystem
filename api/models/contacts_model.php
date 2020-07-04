<?php
	class ContactsModel extends Database{

		private $db = "";
		private $cn = "";

		function __construct(){
			$this->db = new Database();
			$this->cn = $this->db->connect();
		}

		function checkIfUserExist($emailaddress){
			$res = array();
			$rows = array();
			$res['err'] = 0;
			$sql = "SELECT * FROM tbl_users WHERE tbl_users.emailaddress = '$emailaddress' AND tbl_users.status = 1";
			
			$qry = $this->cn->query($sql);
			if(!$qry){
				$res['err'] = 1;
				$res['errmsg'] = "error in func checkIfUserExist(). ". $this->cn->error;
				goto exitme;
			}
			while($row = $qry->fetch_array(MYSQLI_ASSOC)){
				$rows[] = $row;
			}
			exitme:
			return $rows;
		}

		function addContact($data){
			$res = array();
			$name = $data['name'];
			$emailaddress = $data['emailaddress'];
			$password = $data['password'];
			
			$sql = "INSERT INTO tbl_users (name, emailaddress, password)
							VALUES ('$name','$emailaddress', '$password')";
			$qry = $this->cn->query($sql);
			if(!$qry){
				$res['err'] = 1;
				$res['errmsg'] = "error in func addContact(). ". $this->cn->error;
				goto exitme;
			}

			exitme:
			return $res;
		}

		public function closeDB(){
			$this->cn->close();
		}
	}
?>