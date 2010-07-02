<?php 
/* SVN FILE: $Id$ */
/* Navigation Fixture generated on: 2010-07-02 11:25:38 : 1278069938*/

class NavigationFixture extends CakeTestFixture {
	var $name = 'Navigation';
	var $table = 'navigations';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'title' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'visible' => array('type'=>'boolean', 'null' => true, 'default' => '1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id' => 1,
		'title' => 'Lorem ipsum dolor sit amet',
		'visible' => 1
	));
}
?>