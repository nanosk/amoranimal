<?php

class Marca extends AppModel 
{
	public $name = 'Marca';
	
	
	public $validate = array('descripcion' => array('rule' => 'notEmpty'));
	
	
	public $actsAs = array(
			'Upload.Upload' => array(
					//'imagen','imagen2','imagen3' => array(
					'imagen' => array(
							'fields' => array(
									'dir' => 'imagen_dir'
							)
					)
			)
	);
}