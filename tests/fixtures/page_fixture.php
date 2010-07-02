<?php 
/* SVN FILE: $Id$ */
/* Page Fixture generated on: 2010-07-02 12:54:19 : 1278075259*/

class PageFixture extends CakeTestFixture {
	var $name = 'Page';
	var $table = 'pages';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'title' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'permalink' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 50),
		'body' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'navigation_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'publish' => array('type'=>'boolean', 'null' => true, 'default' => '1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id' => 1,
		'title' => 'Lorem ipsum dolor sit amet',
		'permalink' => 'Lorem ipsum dolor sit amet',
		'body' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'navigation_id' => 1,
		'publish' => 1
	));
}
?>