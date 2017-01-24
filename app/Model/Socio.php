<?php

class Socio extends AppModel 
{
	public $name = 'Socio';
	public $belongsTo = array('User','Formapago');
	public $hasMany = array('Cuota');
	
	public $virtualFields = array(
    'cmbtexto1' => 'CONCAT(Socio.dni, ": ", Socio.apellido, ", ", Socio.nombre, "| Cuota:  $", Socio.importe_cuota)',
	'apellidoynombre' => 'CONCAT(Socio.apellido, ", ", Socio.nombre )'
	);
	//public $hasMany= array('Tarjeta');
	public $validate = array(
	'dni'=>array(
		'rule'=>array('notempty'),
	    'message'=> 'Campo obligatorio.',
	),
	'email'=>array(
		'rule'=>array('notempty'),
	    'message'=> 'Campo obligatorio.',
	),'email'=>array(
		'rule'=>array('email'),
	    'message'=> '* DEBE SER UN EMAIL VALIDO.',
	)
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