<?php

class Administradore extends AppModel 
{
	public $name = 'Administradore';
	public $belongsTo = array('User');
	

	//public $hasMany= array('Tarjeta');
	public $validate = array(
	'nombre'=>array(
		'rule'=>array('notempty'),
	    'message'=> 'Campo obligatorio.',
	),'email'=>array(
		'rule'=>array('notempty'),
	    'message'=> 'Campo obligatorio.',
	),'email'=>array(
		'rule'=>array('email'),
	    'message'=> '* DEBE SER UN EMAIL VALIDO',
	)
	
		);



	public $virtualFields = array(
    
	'apellidoynombre' => 'CONCAT(Administradore.apellido, ", ", Administradore.nombre )'
	);		
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