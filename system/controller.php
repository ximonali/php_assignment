<?php
class Controller {
		function load($url) {
			require($url . '.php');
		}

		function loadModel($url) {
			$this->load('model/'. $url);
			$class = 'Model' . preg_replace('/[^a-zA-Z0-9]/', '', $url);
			$model = new $class();
			return $model;
		}
}
?>