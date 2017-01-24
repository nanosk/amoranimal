<?php

class Cuota extends AppModel 
{
	public $name = 'Cuota';
	public $belongsTo = array('Formapago','Socio');
	
	
	public $virtualFields = array(
    
	'cmbtexto1' => 'CONCAT(Cuota.monto_fijo, ", ", Cuota.vencimiento, ", ", Cuota.socio_id )'
	);
	

	public $validate = array(
	'monto_fijo'=>array(
		'rule'=>array('notempty'),
	    'message'=> 'Campo obligatorio.',
	)/*,
	'fechanacimiento' => array(
		'rule'=> array('date', 'dmy'),
		'message'=> 'Enter a valid date in YY-MM-DD format.',
		'allowEmpty' => true
		)*/
		);

	
    
}