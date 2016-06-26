<?php
	class ControllerUserTestCenter extends Controller {
		function index() {
			$model_user_test = $this->loadModel("user/test_center");
			$userTest = $model_user_test->getAllTest();
			include('view/common/header.php');
			include('view/user/test_center.php');
			include('view/common/footer.php');			
		}


	}
?>