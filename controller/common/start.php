<?php
	class ControllerCommonStart extends Controller {
		function index() {
			$this->load('model/student/student');
			$this->load('view/common/header');
			$this->load('view/common/start');
			$this->load('view/common/footer');
		}
	}
?>