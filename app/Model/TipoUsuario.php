<?php
App::uses('AppModel', 'Model');
/**
 * TipoUsuario Model
 *
 * @property Usuario $Usuario
 */
class TipoUsuario extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'tipo';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'tipo_usuario_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
