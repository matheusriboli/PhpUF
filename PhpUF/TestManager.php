<?php
static final class TestUtility {
	private static $testClasses = array();
	private static $testCounter = 0;
	private static 
	
	static function AddTestClass(TestClass test) {
		self::testClasses[self::testCounter] = test;
		self::testCounter += 1;
	}
	
	static function RunAllTests() {
		foreach(self::testClasses as $tClass) {
			tClass->RunAllTests();
		}
	}
	
	private static function RunTest($test) {
	
	}
}
?>