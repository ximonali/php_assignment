<?php
class ModelStudentTest extends Model {
	function getAllTests() {
		$student_id = $this->student->getID();
		$tests = $this->query("SELECT * FROM test where student_id = '" . (int)$student_id . "'");
		return $tests->rows;
	}

	function getTest($test_id) {
		$student_id = $this->student->getID();
		$test = $this->query("SELECT * FROM test where test_id = '". (int)$test_id . "' AND student_id = '" . (int)$student_id . "'");
		return $test->row;
	}

	//Return N randon questions ($total_question) from the test_id 
	function getQuestions($test_id, $total_question) {
		$student_id = $this->student->getID();

	}

	//return 4 choices
	function getChoices($question_id) {

	}

	//insert the answer chose
	function setAnswer($question) {
		$student_id = $this->student->getID();

	}

	//insert on table student_test which test and student starting
	function startTest($test_id) {
		$student_id = $this->student->getID();

	}

	//update on table student_test the test over and return if user pass (true or false)
	function endTest($test_id) {
		$student_id = $this->student->getID();

	}

?>