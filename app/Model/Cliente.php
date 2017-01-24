<?php

class Cliente extends AppModel 
{
	public $name = 'Cliente';
	public $belongsTo = array('Provincia','Gimnasio', 'Paise','Ciudade','Tipodocumento', 'User');
	
	
	public $virtualFields = array(
    'cmbtexto1' => 'CONCAT(Cliente.nrodoc, ": ", Cliente.apellido, ", ", Cliente.nombre )',
	'cmbtexto2' => 'CONCAT(Cliente.apellido, ", ", Cliente.nombre )'
	);
	//public $hasMany= array('Tarjeta');
	public $validate = array(
	'nombre'=>array(
		'rule'=>array('notempty'),
	    'message'=> 'Campo obligatorio.',
	)/*,
	'fechanacimiento' => array(
		'rule'=> array('date', 'dmy'),
		'message'=> 'Enter a valid date in YY-MM-DD format.',
		'allowEmpty' => true
		)*/
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