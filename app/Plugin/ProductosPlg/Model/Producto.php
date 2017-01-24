<?php

class Producto extends AppModel 
{
	public $name = 'Producto';
	var $belongsTo = array('Marca'=>array('classname'=>'Marca'),
	'Categoria'=>array('classname'=>'Categoria'));
	
	
	
	
	public $validate = array(
		'nombre' => array('rule' => 'notEmpty'),
		'descripcion' => array('rule' => 'notEmpty')
	);
}