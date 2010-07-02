<?php
class Department extends AppModel {

	var $name = 'Department';
	
	var $belongsTo = array(
		'Faculty' => array(
			'className' => 'Faculty', 
			'foreignKey' => 'faculty_id'
	));

}
?>