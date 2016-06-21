<?php
	class ControllerCommonDashboard extends Controller {
		function index() {
			if (isset($_Session['student'])) {
				$this->studentLog = $_Session['student'];
			}

			if ($this->studentLog->getId()) {
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