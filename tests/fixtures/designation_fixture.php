<?php 
/* SVN FILE: $Id$ */
/* Designation Fixture generated on: 2010-06-30 14:00:54 : 1277906454*/

class DesignationFixture extends CakeTestFixture {
	var $name = 'Designation';
	var $table = 'designations';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'title' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id' => 1,
		'title' => 'Lorem ipsum dolor sit amet'
	));
}
?>