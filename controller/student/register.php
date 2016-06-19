<?php
	class ControllerStudentRegister extends Controller {
		function index() {
			$this->load('view/common/header');
			$this->load('view/student/Register');
			$this->load('view/common/footer');

		}
	}
?>