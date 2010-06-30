<?php 
/* SVN FILE: $Id$ */
/* Contact Fixture generated on: 2010-06-30 16:23:55 : 1277915035*/

class ContactFixture extends CakeTestFixture {
	var $name = 'Contact';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'teacher_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'IM' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id' => 1,
		'teacher_id' => 1,
		'IM' => 'Lorem ipsum dolor sit amet'
	));
}
?>