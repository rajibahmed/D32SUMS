<?php 
/* SVN FILE: $Id$ */
/* Contact Test cases generated on: 2010-06-30 16:23:55 : 1277915035*/
App::import('Model', 'Contact');

class ContactTestCase extends CakeTestCase {
	var $Contact = null;
	var $fixtures = array('app.contact');

	function startTest() {
		$this->Contact =& ClassRegistry::init('Contact');
	}

	function testContactInstance() {
		$this->assertTrue(is_a($this->Contact, 'Contact'));
	}

	function testContactFind() {
		$this->Contact->recursive = -1;
		$results = $this->Contact->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Contact' => array(
			'id' => 1,
			'teacher_id' => 1,
			'IM' => 'Lorem ipsum dolor sit amet'
		));
		$this->assertEqual($results, $expected);
	}
}
?>