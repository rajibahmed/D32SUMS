<?php 
/* SVN FILE: $Id$ */
/* PagesController Test cases generated on: 2010-07-02 13:03:45 : 1278075825*/
App::import('Controller', 'Pages');

class TestPages extends PagesController {
	var $autoRender = false;
}

class PagesControllerTest extends CakeTestCase {
	var $Pages = null;

	function startTest() {
		$this->Pages = new TestPages();
		$this->Pages->constructClasses();
	}

	function testPagesControllerInstance() {
		$this->assertTrue(is_a($this->Pages, 'PagesController'));
	}

	function endTest() {
		unset($this->Pages);
	}
}
?>