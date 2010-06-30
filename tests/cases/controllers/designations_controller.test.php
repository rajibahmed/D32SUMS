<?php 
/* SVN FILE: $Id$ */
/* DesignationsController Test cases generated on: 2010-06-30 16:14:29 : 1277914469*/
App::import('Controller', 'Designations');

class TestDesignations extends DesignationsController {
	var $autoRender = false;
}

class DesignationsControllerTest extends CakeTestCase {
	var $Designations = null;

	function startTest() {
		$this->Designations = new TestDesignations();
		$this->Designations->constructClasses();
	}

	function testDesignationsControllerInstance() {
		$this->assertTrue(is_a($this->Designations, 'DesignationsController'));
	}

	function endTest() {
		unset($this->Designations);
	}
}
?>