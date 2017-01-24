<?php

class Modulogroup extends AppModel 
{
	public $name = 'Modulogroup';
	var $belongsTo = array('Group','Modulo');
	
	public $validate = array('group_id' => array('rule' => 'notEmpty'),
											'modulo_id' => array('rule' => 'notEmpty'));
		
	
}