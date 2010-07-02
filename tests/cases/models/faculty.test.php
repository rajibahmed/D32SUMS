<?php 
/* SVN FILE: $Id$ */
/* Faculty Test cases generated on: 2010-07-02 11:24:54 : 1278069894*/
App::import('Model', 'Faculty');

class FacultyTestCase extends CakeTestCase {
	var $Faculty = null;
	var $fixtures = array('app.faculty');

	function startTest() {
		$this->Faculty =& ClassRegistry::init('Faculty');
	}

	function testFacultyInstance() {
		$this->assertTrue(is_a($this->Faculty, 'Faculty'));
	}

	function testFacultyFind() {
		$this->Faculty->recursive = -1;
		$results = $this->Faculty->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Faculty' => array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet'
		));
		$this->assertEqual($results, $expected);
	}
}
?>