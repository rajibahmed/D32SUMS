<?php
class Faculty extends AppModel {

	var $name = 'Faculty';
	
	var $hasMany = array(
		'Department' => array(
			'className' => 'Department', 
			'foreignKey' => 'faculty_id'
	));

}
?>