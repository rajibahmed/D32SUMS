<?php  

/**
* 
*/
class ContactSchema extends CakeSchema
{
	public	$contacts = array(
		'id' => array('type'=>'integer', 'null' => 'false', 'default' => 'null', 'key' => 'primary'),
		'teacher_id' => array( 'type' => 'integer', 'null' => 'false' ) ,
		'IM' => array( 'type' => 'string', 'null' => 'false',	'length' => '255' ) ,
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
}

?>