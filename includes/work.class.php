<?php

	class Work extends Db {

		public function getUserWorks($id) {
			$sql = "SELECT * FROM work_experience WHERE id_person=$id";
			$result = $this->connect()->query($sql);
			$numRows = $result->num_rows;
			if ($numRows > 0 ) {
				while ( $row = $result->fetch_assoc()) {
					$data[] = $row;
				}
				return $data;
			}
		}

	}

?>