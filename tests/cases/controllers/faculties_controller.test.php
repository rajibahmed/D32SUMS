<?php 
/* SVN FILE: $Id$ */
/* FacultiesController Test cases generated on: 2010-07-02 13:21:16 : 1278076876*/
App::import('Controller', 'Faculties');

class TestFaculties extends FacultiesController {
	var $autoRender = false;
}

class FacultiesControllerTest extends CakeTestCase {
	var $Faculties = null;

	function startTest() {
		$this->Faculties = new TestFaculties();
		$this->Faculties->constructClasses();
	}

	function testFacultiesControllerInstance() {
		$this->assertTrue(is_a($this->Faculties, 'FacultiesController'));
	}

	function endTest() {
		unset($this->Faculties);
	}
}
?>