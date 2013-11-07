<?php
class Depends extends Annotation {
	private $methodNameField;

	function __construct($methodName) {
		$this->methodNameField = $methodName;
	}
	
	function GetMethodName() {
		return $this->methodNameField;
	}
}

class TestMethod extends Annotation {
}

class TargetMethod extends Annotation {
	private $targetMethodNameField;
	
	function __construct($targetMethodName) {
		$this->targetMethodNameField = $targetMethodName;
	}

	function GetTargetMethodName() {
		return $this->targetMethodNameField;
	}
}
?>