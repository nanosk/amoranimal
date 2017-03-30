<?php

class Logbackup extends AppModel 
{
	public $name = 'Logbackup';

	public $validate = array(
	'type'=>array(
		'rule'=>array('notempty'),
	    'message'=> 'Campo obligatorio.',
	));

	
    
}