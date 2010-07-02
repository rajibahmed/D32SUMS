<?php
class Navigation extends AppModel {

	var $name = 'Navigation';
	
	var $hasMany = array('Page' => array('className' => 'Page', 'foreignKey' => 'navigation_id'));

}
?>