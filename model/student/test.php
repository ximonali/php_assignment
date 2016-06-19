<?php
class ModelStudentTest extends Model {
	function getTests() {
		$student_id = $this->student->getID();
		$tests = $this->query("SELECT * FROM test where student_id = '" . (int)$student_id . "'");
		return $tests->rows;
	}

	function getTest($test_id) {
		$student_id = $this->student->getID();
		$test = $this->query("SELECT * FROM test where test_id = '". (int)$test_id . "' AND student_id = '" . (int)$student_id . "'");
		return $test->row;
	}

	function getQuestion($test_id) {

	}

	function getChoices($question_id) {

	}

	function setAnswer($question) {

	}

	function startTest($test_id) {

	}

	function endTest($test_id) {

	}

?>