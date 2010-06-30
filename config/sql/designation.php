<?php  

/**
* 
*/
class DesignationSchema extends CakeSchema
{
	public	$designations = array(
		'id' => array('type'=>'integer', 'null' => 'false', 'default' => 'null', 'key' => 'primary'),
		'title' => array( 'type' => 'string', 'null' => 'false',	'length' => '255' ) ,
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
}

?>