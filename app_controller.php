<?php

class AppController extends Controller {

	public $components = array(
		'Session',
		'DebugKit.Toolbar'
	);
	public $helpers = array(
		'Html',
		'Form',
		'Javascript',
		'Time'
	);	
	
}
?>