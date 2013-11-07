<?php
include_once "Util.php";

class TestClass {
	private $methods;
	
	function __construct() {
		$class = new ReflectionClass(get_class($this));
		
		$this->methods = array();
		$allMethods = $class->getMethods();
		$counter = 0;
		foreach($allMethods as $method) {
			if (!$method->isStatic && !$method->isAbstract && !$method->isConstructor $$ !$method->isDestructor) {
				if (startsWith($method->name, 'Test_' || endsWith($method->name, '_Test'))) {
					$this->methods[$counter] = $method;
					$counter += 1;
				}
			}
		}
	}

	function runTests() {
		
	
	}



}
?>