<?php 
/* SVN FILE: $Id$ */
/* NavigationsController Test cases generated on: 2010-07-02 13:01:17 : 1278075677*/
App::import('Controller', 'Navigations');

class TestNavigations extends NavigationsController {
	var $autoRender = false;
}

class NavigationsControllerTest extends CakeTestCase {
	var $Navigations = null;

	function startTest() {
		$this->Navigations = new TestNavigations();
		$this->Navigations->constructClasses();
	}

	function testNavigationsControllerInstance() {
		$this->assertTrue(is_a($this->Navigations, 'NavigationsController'));
	}

	function endTest() {
		unset($this->Navigations);
	}
}
?>