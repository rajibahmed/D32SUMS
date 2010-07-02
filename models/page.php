<?php
class Page extends AppModel {

	var $name = 'Page';
	
	var $belongsTo = array(
		'Navigation' => array(
			'className' => 'Navigation', 
			'foreignKey' => 'navigation_id'
	));

}
?>