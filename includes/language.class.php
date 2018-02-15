<?php

	class Language extends Db {

		public function getUserLanguages($id) {
			$sql = "SELECT * FROM languages WHERE id_person=$id";
			$result = $this->connect()->query($sql);
			$numRows = $result->num_rows;
			if ($numRows > 0) {
				while ( $row = $result->fetch_assoc() ) {
					$data[] = $row;
				}
				return $data;
			}
		}
	}

?>