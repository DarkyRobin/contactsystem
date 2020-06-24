<?php
	class ContactsModel extends Database{

		private $db = "";
		private $cn = "";

		function __construct(){
			$this->db = new Database();
			$this->cn = $this->db->connect();
		}

		function addContact($data){
			$res = array();
			return $data;
		}

		public function closeDB(){
			$this->cn->close();
		}
	}
?>