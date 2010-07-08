<?php
class Page extends AppModel {

	var $name = 'Page';
	
	var $hasAndBelongsToMany = array(
		'Navigation' => array(
			'className' => 'Navigation', 
			'foreignKey' => 'page_id'
	));

}
?>