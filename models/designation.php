<?php
class Designation extends AppModel {

	var $name = 'Designation';
	var $validate = array(
		'title' => array('notempty')
	);

}
?>