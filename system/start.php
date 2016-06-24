<?php
class Start {
	private $route;
	private $controller;
	private $method;
	private $parameter;
	private $db;

	function init() {
		require('config.php');
		require('system/db.php');
		require('system/controller.php');
		require('system/model.php');
		require('system/student.php');

		if (isset($_GET['route'])) {
			$route = $_GET['route'];
		} else {
			$route = "common/dashboard";
		}

		if (isset($_POST['method'])) {
			$method = $_POST['method'];
		} else if (isset($_GET['method'])) {
			$method = $_GET['method'];
		} else {
			$method = "index";
		}

		if (isset($_POST['parameter'])) {
			$parameter = $_POST['parameter'];
		} else if (isset($_GET['parameter'])) {
			$parameter = $_GET['parameter'];
		} else {
			$parameter = "";
		}

		$student = new Student();
		session_start();
		if (isset($_SESSION['student'])) {
			$student = $_SESSION['student'];
		}

		require('controller/' . $route . '.php');
		$class = 'Controller' . preg_replace('/[^a-zA-Z0-9]/', '', $route);
		$controller = new $class();
		$controller->student = $student;

		if (is_callable(array($controller, $method))) {
			return call_user_func(array($controller, $method), $parameter);
		} else {
			return false;
		}
	} 
	
}
?>