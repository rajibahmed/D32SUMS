<?php 
/* SVN FILE: $Id$ */
/* Teacher Fixture generated on: 2010-06-30 16:09:18 : 1277914158*/

class TeacherFixture extends CakeTestFixture {
	var $name = 'Teacher';
	var $table = 'teachers';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'contact' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'messenger_id' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'information' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'designation_id' => array('type'=>'integer', 'null' => true, 'default' => '0'),
		'user_id' => array('type'=>'integer', 'null' => true, 'default' => '0'),
		'created' => array('type'=>'date', 'null' => true, 'default' => NULL),
		'modified' => array('type'=>'date', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
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
}
?>