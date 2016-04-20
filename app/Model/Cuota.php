<?php
App::uses('AppModel', 'Model');
/**
 * Cuota Model
 *
 * @property FormaPago $FormaPago
 * @property Socio $Socio
 * @property Pago $Pago
 */
class Cuota extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'monto_fijo';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'monto_fijo' => array(
			'money' => array(
				'rule' => array('money'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'vencimiento' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'FormaPago' => array(
			'className' => 'FormaPago',
			'foreignKey' => 'forma_pago_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Socio' => array(
			'className' => 'Socio',
			'foreignKey' => 'socio_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Pago' => array(
			'className' => 'Pago',
			'foreignKey' => 'cuota_id',
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
