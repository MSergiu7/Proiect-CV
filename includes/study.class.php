<?php

	class Study extends Db {
		
		public function getUserStudies($id) {
			$sql = "SELECT * FROM studies WHERE id_person=$id";
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