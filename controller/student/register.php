<?php
	class ControllerStudentRegister extends Controller {
		function index() {
			include('view/common/header.php');
			include('view/student/register.php');
			include('view/common/footer.php');			
		}

		function insert() {
			$student = array(
				'first_name' => $_POST['first_name'],
				'last_name' => $_POST['last_name'],
				'email' => $_POST['email'],
				'password' => $_POST['pwd1'],
				'phone' => $_POST['phone'],
				'address' => $_POST['address']
			);

			$model_student_student = $this->loadModel("student/student");
			$model_student_student->insertStudent($student);

			$studentLogin = $model_student_student->login($student['email'],$student['password']);
			$this->student->setStudent($studentLogin);

			header('Location: http://localhost/php_assignment/index.php?route=common/dashboard');
		}

	}
?>