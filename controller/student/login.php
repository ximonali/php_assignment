<?php
	class ControllerStudentLogin extends Controller {
		function index() {
			
			include('view/common/header.php');
			include('view/student/login.php');
			include('view/common/footer.php');			
		}

		function login() {
			$variabel['email'] = $_GET['email'];
			$variabel['password'] = $_GET['password'];

			$model_student_student = $this->loadModel("student/student");
			if (!$model_student_student->login($variabel)) {
				$errorMsg = "Email or password wrong";
				include('view/common/header.php');
				include('view/student/login.php');
				include('view/common/footer.php');
			} else {
				//
			}

		}
	}
?>