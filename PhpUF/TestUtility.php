<?php
static final class TestUtility {
	private static $testClasses = array();
	private static $counter = 0;
	
	static function AddTestClass(TestClass test) {
		self::testClasses[self::counter] = test;
		self::counter += 1;
	}
	
	static function RunAllTests() {
		foreach(self::testClasses as $tClass) {
			tClass->RunAllTests();
		}
	}
}
?>