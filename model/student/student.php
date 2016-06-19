<?php
class ModelStudentStudent extends Model {
	
	function login($email, $password) {

	}

	function getStudents() {
		$students = $this->query("SELECT * FROM words");
		return $students->rows;
	}

	function getStudent($student_id) {
		$student = $this->db->query("SELECT * FROM student WHERE student_id = '" . (int)$student_id . "'");
		return $student->row;
	}

	function insertStudent($student){

	}

	function updateStudent($student) {

	}

}

?>