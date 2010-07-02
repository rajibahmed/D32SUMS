<?php 
/* SVN FILE: $Id$ */
/* User Fixture generated on: 2010-07-02 12:51:27 : 1278075087*/

class UserFixture extends CakeTestFixture {
	var $name = 'User';
	var $table = 'users';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'fname' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'lname' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'login' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'password' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'email' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id' => 1,
		'fname' => 'Lorem ipsum dolor sit amet',
		'lname' => 'Lorem ipsum dolor sit amet',
		'login' => 'Lorem ipsum dolor sit amet',
		'password' => 'Lorem ipsum dolor sit amet',
		'email' => 'Lorem ipsum dolor sit amet'
	));
}
?>