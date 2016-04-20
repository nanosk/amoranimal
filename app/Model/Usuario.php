<?php
App::uses('AppModel', 'Model');
/**
 * Usuario Model
 *
 * @property Administradore $Administradore
 * @property Comercio $Comercio
 * @property Socio $Socio
 * @property TipoUsuario $TipoUsuario
 */
class Usuario extends AppModel {


/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'usuario';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'usuario' => array(
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'minLength' => array(
				'rule' => array('minLength', 8),
				//'min' => 8,
				'message' => 'El password debe contener al menos 8 caracteres',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'maxLength' => array(
				'rule' => array('maxLength', 20),
				//'max' => 20,
				'message' => 'El password no puede superar los 20 caracteres',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Administradore' => array(
			'className' => 'Administradore',
			'foreignKey' => 'usuario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Comercio' => array(
			'className' => 'Comercio',
			'foreignKey' => 'usuario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Socio' => array(
			'className' => 'Socio',
			'foreignKey' => 'usuario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'TipoUsuario' => array(
			'className' => 'TipoUsuario',
			'foreignKey' => 'tipo_usuario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
