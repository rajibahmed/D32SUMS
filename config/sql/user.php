<?php  

/**
* 
*/
class UserSchema extends CakeSchema
{

	public $users = array(
		'id' => array( 'type'=>'integer', 'null' => 'false', 'default' => 'null', 'key' => 'primary'),
		'fname'=>array( 'type' => 'string', 'null' => 'false', 'length' => '255'),
		'lname'=>array( 'type' => 'string', 'null' => 'false', 'length' => '255'),
		'login'=>array( 'type' => 'string', 'null' => 'false', 'length' => '100'),
		'password' =>array( 'type' => 'string', 'null' => 'false', 'length' => '40'), 
		'email'=>array('type'=>'string', 'null' => 'false', 'length' => '255' ), 
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))			
	);
	

		
}
?>