<?php 
/* SVN FILE: $Id$ */
/* Department Fixture generated on: 2010-07-02 11:24:19 : 1278069859*/

class DepartmentFixture extends CakeTestFixture {
	var $name = 'Department';
	var $table = 'departments';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'faculty_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'name' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id' => 1,
		'faculty_id' => 1,
		'name' => 'Lorem ipsum dolor sit amet'
	));
}
?>