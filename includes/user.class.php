<?php

	class User extends Db {

		public function getAllUsers() {
			$sql = "SELECT * FROM personal_data";
			$result = $this->connect()->query($sql);
			$numRows = $result->num_rows;
			if ($numRows > 0) {
				while ( $row = $result->fetch_assoc()) {
					$data[] = $row;
				}
				return $data;
			}
		}

		public function getUser($id) {
			$sql = "SELECT * FROM personal_data WHERE id_person=$id";
			$result = $this->connect()->query($sql);
			$numRows = $result->num_rows;
			if ($numRows > 0 ) {
				$data = $result->fetch_assoc();
			}
			return $data;
		}

	}

?>