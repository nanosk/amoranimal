<?php

class Aros_aco extends AppModel 
{
	public $name = 'Aros_aco';
	var $belongsTo = array('Aco','Aro','Group');
	public $validate = array(
			'activado'=>array(
					'rule'=>array('notempty'),
					'message'=> 'Campo obligatorio.'),
			'aco_id'=>array(
					'rule'=>array('notempty'),
					'message'=> 'Campo obligatorio.'),
			'aro_id'=>array(
					'rule'=>array('notempty'),
					'message'=> 'Campo obligatorio.')
	);
}