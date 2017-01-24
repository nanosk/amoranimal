<?php

class Comercio extends AppModel 
{
	public $name = 'Comercio';
	public $belongsTo = array('User');
	


	public $validate = array(
	'razon_social'=>array(
		'rule'=>array('notempty'),
	    'message'=> 'Campo obligatorio.'
	),'email'=>array(
		'rule'=>array('notempty'),
	    'message'=> 'Campo obligatorio.',
	),'email'=>array(
		'rule'=>array('email'),
	    'message'=> '* DEBE SER UN EMAIL VALIDO',
	)
	);

		
public $actsAs = array(
        'Upload.Upload' => array(
        'logo' => array(
			'fields' => array(
						'dir' => 'imagen_dir'
					)
				)
        )
    );
    
}