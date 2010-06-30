<?php
class Contact extends AppModel {

	var $name = 'Contact';
	
	var $belongsTo = array(
		'Teacher' => array(
			'className' => 'Teacher', 
			'foreignKey' => 'teacher_id'
	));

}
?>