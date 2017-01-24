<?php

App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
//App::uses('AuthComponent', 'Controller/Component');
class User extends AppModel {

var $belongsTo = array('Group');

public $actsAs = array(
		'Upload.Upload' => array(
				'imagen'=> array(
						'fields' => array(
								'dir' => 'imagen_dir'
						)
				)
		)
);

public $validate = array(
	'username' => array(
	'required' => array(
	'rule' => array('notEmpty'),
	'message' => 'Username es requerido'
	)
),
	'password' => array(
	'required' => array(
	'rule' => array('notEmpty'),
	'message' => 'La Contrasena es requerida'
))
);

public function beforeSave($options = array()) {
	if (isset($this->data[$this->alias]['password'])) {
		$passwordHasher = new SimplePasswordHasher();
		$this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
	}
	return true;
}


}

