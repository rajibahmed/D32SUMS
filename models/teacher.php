<?php
class Teacher extends AppModel {

	public $name = 'Teacher';
	
	public $hasMany = array(
		'Contact' => array(
			'className' => 'Contact', 
			'foreignKey' => 'teacher_id'
	));
	
	public $belongsTo = array(
		'Designation' => array(
			'className' => 'Designation', 
			'foreignKey' => 'designation_id'
	));
}
?>