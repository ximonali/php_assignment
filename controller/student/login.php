<?php
	class ControllerStudentLogin extends Controller {
		function index() {
			$model_student = $this->loadModel('student/student');
			$students = $model_student->getStudents();
			$this->load('view/common/header');
			$this->load('view/student/login');
			$this->load('view/common/footer');

		}
	}
?>