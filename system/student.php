<?php 
class student {
	private $firstname;
	private $lastname;
	private $id;

	function isLogged() {
		return isset($this->$id);
	}

	function getId() {
		return $this->$id;
	}

	function getName() {
		return $this->$firstname . ' ' . $this->$lastname;
	}

	function setStudent($data) {
		$this->$id = $data['student_id'];
		$this->firstname = $data['first_name'];
		$this->lastname = $data['last_name'];
	}	
}
?>
