<?php
class Start {
	private $route;
	private $controller;
	private $method;
	private $parameter;
	private $db;
	private $student;

	function init() {
		require('config.php');
		require('system/db.php');
		require('system/controller.php');
		require('system/model.php');
		require('system/student.php');

		$student = new Student();

		if (isset($_GET['route'])) {
			$route = $_GET['route'];
		} else {
			$route = "common/dashbord";
		}

		if (isset($_GET['method'])) {
			$method = $_GET['method'];
		} else {
			$method = "index";
		}

		if (isset($_GET['parameter'])) {
			$parameter = $_GET['parameter'];
		} else {
			$parameter = "";
		}

		require('controller/' . $route . '.php');
		$class = 'Controller' . preg_replace('/[^a-zA-Z0-9]/', '', $route);
		$controller = new $class();

		if (is_callable(array($controller, $method))) {
			return call_user_func(array($controller, $method), $parameter);
		} else {
			return false;
		}
	} 
	
}
?>