<?php

class Modulo extends AppModel 
{
	public $name = 'Modulo';
	
	
public $virtualFields = array(
    'cmbtexto1' => 'CONCAT(Modulo.controller," - ", Modulo.action)'
);

	public $validate = array('controller' => array('rule' => 'notEmpty'),
											'action' => array('rule' => 'notEmpty'));
	
	
	
	

	
}