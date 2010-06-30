<?php  

/**
* 
*/
class TeacherSchema extends CakeSchema
{
	var $teachers = array(
		'id' => array('type'=>'integer', 'null' => 'false', 'default' => 'null', 'key' => 'primary'),
		'name' => array( 'type' => 'string', 'null' => 'false',	'length' => '255' ),
		'contact' => array( 'type' => 'text', 'null' => 'false',	'length' => '1000' ),
		'contact_id'=> array( 'type' => 'string', 'null' => 'false',	'length' => '255' ),
		'information' => array( 'type' => 'text', 'null' => 'false',	'length' => '5000' ),
		'designation_id' => array('type'=>'integer', 'null' => 'false', 'default' => '1'),
		'user_id'=>array('type'=>'integer', 'null' => 'false'),
		'created'=>array('type'=>'date', 'null' => 'false' ),
		'modified'=>array('type'=>'date', 'null' => 'false' ),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))			
	);
}

?>