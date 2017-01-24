<?php

class Formapago extends AppModel 
{
	public $name = 'Formapago';
	
	


	public $validate = array(
	'descripcion'=>array(
		'rule'=>array('notempty'),
	    'message'=> 'Campo obligatorio.',
	));

	
    
}