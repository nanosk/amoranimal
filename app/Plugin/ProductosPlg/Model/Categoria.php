<?php

class Categoria extends AppModel 
{
	public $name = 'Categoria';
	
	
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