<?php 
/* SVN FILE: $Id$ */
/* TeachersController Test cases generated on: 2010-06-30 16:56:34 : 1277916994*/
App::import('Controller', 'Teachers');

class TestTeachers extends TeachersController {
	var $autoRender = false;
}

class TeachersControllerTest extends CakeTestCase {
	var $Teachers = null;

	function startTest() {
		$this->Teachers = new TestTeachers();
		$this->Teachers->constructClasses();
	}

	function testTeachersControllerInstance() {
		$this->assertTrue(is_a($this->Teachers, 'TeachersController'));
	}

	function endTest() {
		unset($this->Teachers);
	}
}
?>