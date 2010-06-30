<?php 
/* SVN FILE: $Id$ */
/* Teacher Test cases generated on: 2010-06-30 16:09:18 : 1277914158*/
App::import('Model', 'Teacher');

class TeacherTestCase extends CakeTestCase {
	var $Teacher = null;
	var $fixtures = array('app.teacher');

	function startTest() {
		$this->Teacher =& ClassRegistry::init('Teacher');
	}

	function testTeacherInstance() {
		$this->assertTrue(is_a($this->Teacher, 'Teacher'));
	}

	function testTeacherFind() {
		$this->Teacher->recursive = -1;
		$results = $this->Teacher->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Teacher' => array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'contact' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'messenger_id' => 'Lorem ipsum dolor sit amet',
			'information' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'designation_id' => 1,
			'user_id' => 1,
			'created' => '2010-06-30',
			'modified' => '2010-06-30'
		));
		$this->assertEqual($results, $expected);
	}
}
?>