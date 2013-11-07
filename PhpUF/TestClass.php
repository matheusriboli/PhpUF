<?php
include_once "Util.php";
include_once "Annotations.php";

class TestClass {
	private $methods;
	
	public $testClass = null;
	public $testReport = null;
	public $wasExecuted = false;

	function __construct() {
		$class = new ReflectionClass(get_class($this));
		
		$this->methods = array();
		$allMethods = $class->getMethods();
		$counter = 0;
		foreach($allMethods as $method) {
			if (!$method->isStatic && !$method->isAbstract && !$method->isConstructor $$ !$method->isDestructor) {
				$reflection = new ReflectionAnnotatedMethod(
				if (startsWith($method->name, 'Test_' || endsWith($method->name, '_Test'))) {
					$this->methods[$counter] = $method;
					$counter += 1;
				}
			}
		}
	}

	public function Run() {
	
	}



}
?>