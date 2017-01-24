<?php

class Pago extends AppModel 
{
	public $name = 'Pago';
	var $belongsTo = array('Socio','Formapago');
	
	 public $validate = array(
		'fecha_pago' => array(
			'rule1'=>array(
					'rule'=>array('notempty'),
			   	 	'message'=> 'Campo obligatorio.',
					),
			'rule2'=> array(
				'rule'=>array('date'),
	   	 		'message'=> 'Debe ser una fecha valida.',
				)			
			),
		'monto' => array(
			'rule1'=>array(
					'rule'=>array('notempty'),
			   	 	'message'=> 'Campo obligatorio.',
					),
			'rule2'=> array(
				'rule'=>array('Numeric'),
	   	 		'message'=> 'Debe ser Numerico.',
				)			
			)
		
			
			
		);
		
		
		
		
		
	
}