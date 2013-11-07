<?php
include_once "Util.php";
include_once "Assert.php";
include_once "TestClass.php";
include_once "TestReport.php";

final class TestClassExecutor {
	public $testClass = null;
	public $testReport = null;
	public $wasExecuted = false;

	public function __construct($testClassName) {
		$this->testClass = $testClassName;
	}

	public function Run() {
	
	}
}
?>