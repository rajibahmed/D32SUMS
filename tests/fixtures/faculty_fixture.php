<?php 
/* SVN FILE: $Id$ */
/* Faculty Fixture generated on: 2010-07-02 11:24:54 : 1278069894*/

class FacultyFixture extends CakeTestFixture {
	var $name = 'Faculty';
	var $table = 'faculties';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id' => 1,
		'name' => 'Lorem ipsum dolor sit amet'
	));
}
?>