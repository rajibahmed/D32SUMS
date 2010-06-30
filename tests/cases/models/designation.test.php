<?php 
/* SVN FILE: $Id$ */
/* Designation Test cases generated on: 2010-06-30 14:00:54 : 1277906454*/
App::import('Model', 'Designation');

class DesignationTestCase extends CakeTestCase {
	var $Designation = null;
	var $fixtures = array('app.designation');

	function startTest() {
		$this->Designation =& ClassRegistry::init('Designation');
	}

	function testDesignationInstance() {
		$this->assertTrue(is_a($this->Designation, 'Designation'));
	}

	function testDesignationFind() {
		$this->Designation->recursive = -1;
		$results = $this->Designation->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Designation' => array(
			'id' => 1,
			'title' => 'Lorem ipsum dolor sit amet'
		));
		$this->assertEqual($results, $expected);
	}
}
?>