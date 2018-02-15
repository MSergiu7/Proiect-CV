<?php

	class Db {

		private $hostname;
		private $username;
		private $password;
		private $db;

		public function connect() {
			$this->hostname = "localhost";
			$this->username = "root";
			$this->password = "";
			$this->db = "cv-uri";

			$conn = new mysqli($this->hostname, $this->username, $this->password, $this->db);

			return $conn;
		}
	}

?>