<?php


class Promo extends AppModel 
{
	public $name = 'Promo';
	public $belongsTo = array('Comercio');
	


	

		
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