<?php  

/**
* 
*/
class PageSchema extends CakeSchema
{
	
	public $pages = array(
		'id' => array('type'=>'integer', 'null' => 'false', 'default' => 'null', 'key' => 'primary'),
		'title'=>array('type'=>'string', 'null' => 'false', 'length' => '255'),
		'permalink'=>array( 'type' => 'string', 'null'=>'false', 'length'=>'50'),
		'body' => array('type'=>'text','length'=>'6000'),
		'publish'=>array('type'=>'boolean','default'=>'false'),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))			
	);
	
	public $navigations = array(
		'id' => array('type'=>'integer', 'null' => 'false', 'default' => 'null', 'key' => 'primary'),
		'title'=>array('type'=>'string','null'=>'false', 'length' => '255'),
		'visible' => array( 'type' => 'boolean', 'default' => 'false'), 
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))			
	);
	
	public $departments = array(
		'id' => array('type'=>'integer', 'null' => 'false', 'default' => 'null', 'key' => 'primary'),
		'faculty_id' => array( 'type' => 'integer', 'null' => 'false'), 
		'name'=>array('type'=>'string','null'=>'false', 'length' => '255'),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))			
	);

	public $faculties = array(
		'id' => array('type'=>'integer', 'null' => 'false', 'default' => 'null', 'key' => 'primary'),
		'name'=>array('type'=>'string','null'=>'false', 'length' => '255'),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))			
	);
	
	
	public $navigations_pages=array(
		'navigation_id' => array( 'type' => 'integer', 'null' => 'false'), 
		'page_id' => array( 'type' => 'integer', 'null' => 'false')
	);
	
}


?>