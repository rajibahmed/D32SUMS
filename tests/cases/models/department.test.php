<?php 
/* SVN FILE: $Id$ */
/* Department Test cases generated on: 2010-07-02 11:24:19 : 1278069859*/
App::import('Model', 'Department');

class DepartmentTestCase extends CakeTestCase {
	var $Department = null;
	var $fixtures = array('app.department');

	function startTest() {
		$this->Department =& ClassRegistry::init('Department');
	}

	function testDepartmentInstance() {
		$this->assertTrue(is_a($this->Department, 'Department'));
	}

	function testDepartmentFind() {
		$this->Department->recursive = -1;
		$results = $this->Department->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Department' => array(
			'id' => 1,
			'faculty_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet'
		));
		$this->assertEqual($results, $expected);
	}
}
?>