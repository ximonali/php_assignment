<?php
	class ControllerCommonStart extends Controller {
		function index() {
			$this->load('model/student/student');
			include('view/common/header.php');
			include('view/common/start.php');
			include('view/common/footer.php');			
		}
	}
?>