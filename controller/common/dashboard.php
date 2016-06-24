<?php
	class ControllerCommonDashboard extends Controller {
		function index() {
			if ($this->student->isLogged()) {
				include('view/common/header.php');
				include('view/common/dashboard.php');
				include('view/common/footer.php');			
			} else {
				include('view/common/header.php');
				include('view/student/login.php');
				include('view/common/footer.php');			
			}
		}
	}
?>