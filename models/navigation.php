<?php
class Navigation extends AppModel {

	var $name = 'Navigation';
	
	var $hasAndBelongsToMany = array(
		'Page' => array(
			'className' => 'Page', 
			'foreignKey' => 'page_id'
	),
		'Menus'=>array(
			'className'=>'Page',
			'foreignKey' => 'navigation_id',
			'fields'=>array('Menus.id','Menus.title','Menus.permalink','Menus.publish'),
			'conditions'=>array('Menus.publish'=>true)
		)
	);
	
}
?>