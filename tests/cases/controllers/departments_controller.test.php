<?php 
/* SVN FILE: $Id$ */
/* DepartmentsController Test cases generated on: 2010-07-02 13:21:34 : 1278076894*/
App::import('Controller', 'Departments');

class TestDepartments extends DepartmentsController {
	var $autoRender = false;
}

class DepartmentsControllerTest extends CakeTestCase {
	var $Departments = null;

	function startTest() {
		$this->Departments = new TestDepartments();
		$this->Departments->constructClasses();
	}

	function testDepartmentsControllerInstance() {
		$this->assertTrue(is_a($this->Departments, 'DepartmentsController'));
	}

	function endTest() {
		unset($this->Departments);
	}
}
?>