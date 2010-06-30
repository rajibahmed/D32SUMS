<?php
class Designation extends AppModel {

	public $name = 'Designation';
	
	public $validate = array(
		'title'=>array(
			'mustBeFilled'=>array(
				'rule'=>'notEmpty',
				'message'=>'Title can not be empty'	
			),
			'leastEightChars'=>array(
				'rule' => array('minLength',4),
				'message'=>'Designation title must be more than 4 chacharters' 	
			),
			'uniquness'=>array(
				'rule' => array('isUnique'),
				'message'=>'Designation is already in the database' 	
			)
		)
	);
	
	public $hasMany = array(
		'Teacher' => array(
			'className' => 'Teacher', 
			'foreignKey' => 'teacher_id'
	));
	
}
?>