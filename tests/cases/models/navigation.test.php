<?php 
/* SVN FILE: $Id$ */
/* Navigation Test cases generated on: 2010-07-02 11:25:38 : 1278069938*/
App::import('Model', 'Navigation');

class NavigationTestCase extends CakeTestCase {
	var $Navigation = null;
	var $fixtures = array('app.navigation');

	function startTest() {
		$this->Navigation =& ClassRegistry::init('Navigation');
	}

	function testNavigationInstance() {
		$this->assertTrue(is_a($this->Navigation, 'Navigation'));
	}

	function testNavigationFind() {
		$this->Navigation->recursive = -1;
		$results = $this->Navigation->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Navigation' => array(
			'id' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'visible' => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>