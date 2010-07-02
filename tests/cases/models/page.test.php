<?php 
/* SVN FILE: $Id$ */
/* Page Test cases generated on: 2010-07-02 12:54:19 : 1278075259*/
App::import('Model', 'Page');

class PageTestCase extends CakeTestCase {
	var $Page = null;
	var $fixtures = array('app.page');

	function startTest() {
		$this->Page =& ClassRegistry::init('Page');
	}

	function testPageInstance() {
		$this->assertTrue(is_a($this->Page, 'Page'));
	}

	function testPageFind() {
		$this->Page->recursive = -1;
		$results = $this->Page->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Page' => array(
			'id' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'permalink' => 'Lorem ipsum dolor sit amet',
			'body' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'navigation_id' => 1,
			'publish' => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>