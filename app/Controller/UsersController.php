<?php
// app/Controller/UsersController.php


class UsersController extends AppController {
public $helpers = array ('Html','Form','Js');
public $components = array('Cookie','Session','RequestHandler','Paginator','Email');
public $uses = array('User','Group','Comercio', 'Administradore','Socio');



public $botones;

public function beforeFilter() {
    parent::beforeFilter();
    // For CakePHP 2.1 and up
	if ($this->USER_ROL == $this->ROL_ADMIN){
		$this->botones = array(
				array('controller'=>'administradores',  'action'=>'index','class'=>'btn btn-sm btn-flat btn-primary','label'=>'Inicio','icon'=>null)
		);
	}

	if ($this->USER_ROL == $this->ROL_CLIENTE){
		$this->botones = array(
			array( 'controller'=>'users', 'action'=>'micuenta', 'class'=>'btn btn-sm btn-flat btn-default', 'label'=>'Mi Cuenta', 'icon'=>'fa fa-list' ),
			array('controller'=>'users',  'action'=>'enviaremailactivacion','class'=>'btn btn-sm btn-flat btn-primary','label'=>'Enviar Email de Activacion','icon'=>'fa fa-send'),
			array( 'controller'=>'users', 'action'=>'mirutina', 'class'=>'btn btn-sm btn-flat btn-default', 'label'=>'Mi Rutina Actual', 'icon'=>'fa fa-list' ),
			array( 'controller'=>'users', 'action'=>'histmisrutinas', 'class'=>'btn btn-sm btn-flat btn-default', 'label'=>'Historico Mis Rutinas', 'icon'=>'fa fa-list' ),
			array( 'controller'=>'users', 'action'=>'histmispagos', 'class'=>'btn btn-sm btn-flat btn-default', 'label'=>'Historico Mis Pagos', 'icon'=>'fa fa-list' )
			);
	}
	
	$this->set('botones',$this->botones);
    $this->Auth->allow('login','logout', 'registrarse','enviaremailactivacion','activacion','avisoactivacion');
}




public function frmEnviarEmail(){
	$form = array(
			array('type'=>'text',   'label'=>'Enviar a:','input'=>'destinatario'),
	        array('type'=>'text',   'label'=>'Asunto','input'=>'asunto'),
			array('type'=>'textarea',   'label'=>'Descripcion', 'input'=>'descripcion'),
			array('type'=>'link',   'label'=>'Enviar Email Activacion', 'url'=>array('controller'=>'users','action'=>'enviaremailactivacion'))
			);
	return $form;
}


function enviaremail(){

	$this->set('form',$this->frmEnviarEmail());
	
	if ($this->request->is('post')){

	
		$to = 'ezgatrabajo@gmail.com';
		$subject = 'Activacion de la Cuenta GYMAPP';
		$template = 'default'; 
		$sendAs = 'text';		
		//setear variables que seran vistas en el Email.
		$this->set('descripcion', $this->request->data['User']['descripcion']);
		
		$this->FPENVIAREMAIL($to, $subject,$template,$sendas,$mensajeflash);
		
		
		
	}
	
}

function avisoactivacion(){
	
}

function activacion ($clave){
	//$this->autorender = false;
	//buscar en users la clave
	
	$this->layout = 'AdminLTE2_vacio';
	$user = $this->User->findByClaveactivacion($clave);
	if(!$user){
		$this->Session->setFlash('Clave de activacion Incorrecta','error');
		//salir del sistema 
		//$this->redirect(array('action'=>'login'));
		
	}else {
	
		$id = $user['User']['id'];
		
		//Actualizar Usuario
		$this->User->id = $id;
		$datos = array('claveactivacion'=>null);
		$this->User->set($datos);
		$this->User->save();
		
		
		$this->Session->setFlash('Cuenta activada correctamente','success');
		//$this->redirect(array('controller'=>'administrador', 'action'=>'index'));
	}
	

}
		 
		 
		 
		 
		 
function enviaremailactivacion($user_id = null){
		$this->autorender = false;
	
	
		//Asignar valor a variables
		$user = $this->User->findById($user_id);
		$gimnasio = $this->Gimnasio->findByUserId($user_id);
		$link = "http://www.ventaguale.com.ar/users/activacion/". $user['User']['claveactivacion'];
		$pass = $this->Cookie->read('password');
		
		
		//Setear variables que seran vistas en el Email.
		$this->set('gimnasio',$gimnasio);
		$this->set('user',$user);
		$this->set('link',$link);
		$this->set('pass', $pass);
		
		//PARAMETROS DE EMAIL
		$to       = $user['User']['email'];
		$template = 'enviaremailactivacion';
		$sendAs   = 'text';		
		$subject  = 'Activacion de la cuenta GYMAPP';
		$mensajeflash = "Cuenta Registrada Correctamente. Para Acceder al sitio debe realizar la Activasion de la Cuenta. Por favor revise su Cuenta de Correo para la Activacion.";
		$redirect = array('action'=>'avisoactivacion');
		$this->FPENVIAREMAIL($to, $subject,$template,$sendAs,$mensajeflash,$redirect);
		
		
		
		
		
	
}




function histmispagos(){
	$this->set('b_filtros',false);
	$id =$this->Auth->user('id');
	
	
	$cliente = $this->Cliente->findByUserId($id);
	
	if (!$cliente) {
		$this->Session->setFlash('Cliente no Existe','error');
		return $this->redirect(array( 'action' => 'micuenta'));
	
	}
	//debug($cliente);
	$cliente_id = $cliente['Cliente']['id'];
	$cond = array('conditions'=>array('cliente_id'=> $cliente_id),
			'order'=>'Cuota.created DESC');
	$registros = $this->Cuota->find('all',$cond);
	$this->set('registros',$registros);
	
}




function setearcookie($idclienteseleccionado){
	$this->autoRender = false;
	/*obtener controlador y accion origen */
	
	$this->Cookie->write('idclienteseleccionado', $idclienteseleccionado);
	$controlador = $this->Cookie->read('controlador');
	$vista = $this->Cookie->read('vista');
	$this->redirect(array('controller' => $controlador, 'action' => $vista));
	
	
	
}

public function index() {
	$this->paginate =  array ('limit' => 15);
	$this->set('registros',$this->paginate('User'));
	
}




public function micuentacomercio(){
	 //Obtener Datos de usuario
	 $id =$this->Auth->user('id');
	 $this->User->id = $id;
	  
	 //Validar Usuario
	 if (!$this->User->exists()) {
		throw new NotFoundException(__('Usuario invalido'));
	 }
	 $useradmin = $this->Auth->user();
	
	 $this->set('b_filtros',false);
	 
	//Buscar Comercio 
	$registro = $this->Comercio->findByUserId($id);
	 //Validar Usuario
	 if (!$registro) {
			$this->Session->setFlash('No existe Comercio para Usuario logueado','error');
			return $this->redirect(array('controller'=>'paginas', 'action' => 'error'));
	 }
	$form = array(
			array('type'=>'hidden', 'value'=>$registro['Comercio']['id'] ,'label'=>'ID', 'input'=>'id'),
			array('type'=>'text', 'value'=>$registro['Comercio']['nombre'] ,'label'=>'Nombre', 'input'=>'nombre'),
			array('type'=>'text', 'value'=>$registro['Comercio']['apellido'] ,'label'=>'Apellido', 'input'=>'apellido'),
			array('type'=>'text', 'value'=>$registro['Comercio']['telefono'] ,'label'=>'Telefono', 'input'=>'telefono'),
			array('type'=>'text', 'value'=>$registro['Comercio']['email'] ,'label'=>'Email', 'input'=>'email'),
			array('type'=>'text', 'value'=>$registro['Comercio']['direccion'] ,'label'=>'Direccion', 'input'=>'direccion'),
			array('type'=>'hidden', 'value'=>'Comercio','label'=>'entidad', 'input'=>'entidad'),
			);
	$entidad = 'Comercio';
	
	
					
	if ($this->request->is('post')){
		//Guardar datos
		
		$data = $this->request->data;
		
			$datos = array(
				
				'nombre'=>$data['User']['nombre'],
				'apellido'=>$data['User']['apellido'],
				'telefono'=>$data['User']['telefono'],
				'email'=>$data['User']['email'],
				'direccion'=>$data['User']['direccion'],
			
			);
			
			
			//Actualiza el administrador
			$this->Administradore->id = $data['User']['id'];
			$this->Administradore->set($datos);
			$this->Administradore->save();
			$this->Session->setFlash('Datos actualizados correctamente','success');
			return $this->redirect(array('controller'=>'users', 'action' => 'micuentaadmin'));
		
	}
	
	
  //pasar datos a la vista
  $this->set('useradmin',$useradmin);
  $this->set('entidad',$entidad);
  $this->set('form',$form);
  $this->set('infouser',$registro);
  
	
}

public function micuentaadmin(){
	 //Obtener Datos de usuario
	 $id =$this->Auth->user('id');
	 $this->User->id = $id;
	  
	 //Validar Usuario
	 if (!$this->User->exists()) {
		throw new NotFoundException(__('Usuario invalido'));
	 }
	 $useradmin = $this->Auth->user();
	
	 $this->set('b_filtros',false);
	 
	//Buscar administrador 
	$registro = $this->Administradore->findByUserId($id);
	 //Validar Usuario
	 if (!$registro) {
			$this->Session->setFlash('No existe Administrador para usuario logueado','error');
			return $this->redirect(array('controller'=>'paginas', 'action' => 'error'));
	 }
	$form = array(
			array('type'=>'hidden', 'value'=>$registro['Administradore']['id'] ,'label'=>'ID', 'input'=>'id'),
			array('type'=>'text', 'value'=>$registro['Administradore']['nombre'] ,'label'=>'Nombre', 'input'=>'nombre'),
			array('type'=>'text', 'value'=>$registro['Administradore']['apellido'] ,'label'=>'Apellido', 'input'=>'apellido'),
			array('type'=>'text', 'value'=>$registro['Administradore']['telefono'] ,'label'=>'Telefono', 'input'=>'telefono'),
			array('type'=>'text', 'value'=>$registro['Administradore']['email'] ,'label'=>'Email', 'input'=>'email'),
			array('type'=>'text', 'value'=>$registro['Administradore']['direccion'] ,'label'=>'Direccion', 'input'=>'direccion'),
			array('type'=>'hidden', 'value'=>'administradore','label'=>'entidad', 'input'=>'entidad'),
			);
	$entidad = 'Administradore';
	
	
					
	if ($this->request->is('post')){
		//Guardar datos
		
		$data = $this->request->data;
		
			$datos = array(
				
				'nombre'=>$data['User']['nombre'],
				'apellido'=>$data['User']['apellido'],
				'telefono'=>$data['User']['telefono'],
				'email'=>$data['User']['email'],
				'direccion'=>$data['User']['direccion'],
			
			);
			
			
			//Actualiza el administrador
			$this->Administradore->id = $data['User']['id'];
			$this->Administradore->set($datos);
			$this->Administradore->save();
			$this->Session->setFlash('Datos actualizados correctamente','success');
			return $this->redirect(array('controller'=>'users', 'action' => 'micuentaadmin'));
		
	}
	
	
  //pasar datos a la vista
  $this->set('useradmin',$useradmin);
  $this->set('entidad',$entidad);
  $this->set('form',$form);
  $this->set('infouser',$registro);
  
	
}




public function micuenta(){
  	
  
  //chequear usuario
  if (!$this->User->exists()) {
  	throw new NotFoundException(__('Usuario invalido'));
  }
  $user = $this->User->findById($id);
  if (!$this->request->data) {
  	$this->request->data['User']['username'] = $user['User']['username'];
  }
	
  //SI ES UN COMERCIO SE ARMA ESTE FORM
  if($this->Auth->User('group_id') == $this->ROL_COMERCIO){
	$registro =$this->Comercio->findByUserId($id);
	$form = array(
			array('type'=>'hidden', 'value'=>$registro['Comercio']['id'] ,'label'=>'ID', 'input'=>'id'),
			array('type'=>'text', 'value'=>$registro['Comercio']['nombre'] ,'label'=>'Nombre', 'input'=>'nombre'),
			array('type'=>'text', 'value'=>$registro['Comercio']['apellido'] ,'label'=>'Apellido', 'input'=>'apellido'),
			array('type'=>'text', 'value'=>$registro['Comercio']['direccion'] ,'label'=>'Direccion', 'input'=>'direccion'),
			array('type'=>'text', 'value'=>$registro['Comercio']['telefono'] ,'label'=>'Telefono', 'input'=>'telefono'),
			array('type'=>'text', 'value'=>$registro['Comercio']['email'] ,'label'=>'Email', 'input'=>'email'),
			array('type'=>'hidden', 'value'=>'comercio','label'=>'entidad', 'input'=>'entidad'),
			);
	$entidad = 'Comercio';
	
  }
  
  
  $this->set('entidad',$entidad);
  $this->set('form',$form);
  $this->set('infouser',$registro);
  
  
  
  //pasar datos a la vista
  $this->set('user',$user);
  //
  
}

public function cambiarpass(){
   
	$id =$this->Auth->user('id');
	$this->User->id = $id;
	
	
	if (!$this->User->exists()) {
		throw new NotFoundException(__('Usuario invalido'));
	}
	
	if ($this->request->is('post') || $this->request->is('put')) {
		$datos = $this->request->data;
		
		
		if ($datos['User']['password'] != $datos['User']['passwordrepeat']){
			$this->Session->setFlash('Contraseña no coincide','error');
			
			
			//si es administrador
			if($this->USER_ROL == $this->ROL_ADMIN ){ 
				$action = 'micuentaadmin';
			}
			if($this->USER_ROL == $this->ROL_COMERCIO ){ 
				$action = 'micuentacomercio';
			}
			if($this->USER_ROL == $this->ROL_SOCIO ){ 
				$action = 'micuentasocio';
			}
			//
			return $this->redirect(array('controller'=>'users', 'action' => $action));
			
			
			
		} 
		
		if ($this->User->save($this->request->data)) {
			$this->Session->setFlash('Contraseña cambiada correctamente','success');
			//si es administrador
			if($this->USER_ROL == $this->ROL_ADMIN ){ 
				$action = 'micuentaadmin';
			}
			if($this->USER_ROL == $this->ROL_COMERCIO ){ 
				$action = 'micuentacomercio';
			}
			if($this->USER_ROL == $this->ROL_SOCIO ){ 
				$action = 'micuentasocio';
			}
			//
			return $this->redirect(array('controller'=>'users', 'action' => $action));
			
		}
	}else {
		$this->request->data = $this->User->read(null, $id);
		unset($this->request->data['User']['password']);
	}
	
}












public function registrarse(){
	
	$this->layout='catalogo3';
	
	if ($this->request->is('post')){
		
		//Chequear nombre de usuario 
		//debug($this->request->data['User']['username']);
		$user = $this->User->find('all',array('conditions'=>array('username'=>$this->request->data['User']['username'])));
		
		//debug($user);
		if($user){
			$this->Session->setFlash('Nombre de usuario ya esta registrado, por favor cambiarlo e intentar nuevamente.','error');
			return false;// $this->redirect(array('controller'=>'users','action' => 'registrarse'));
		}
		
		//CREAR UN USUARIO
		$this->User->create();
		
		//CREAR CLAVE PARA ACTIVACION 
		$clave = 'X1BWQ2';
		$clave = rand(5, 1000);
		$passwordHasher = new SimplePasswordHasher();
		$clave= $passwordHasher->hash($clave);
	
		$this->request->data['User']['claveactivacion'] = $clave;
		
		
		
		$this->Cookie->write('password', $this->request->data['User']['password']);
		//CREAR CAMPO EN TABLA claveactivacion 
		
		
		
		if ($this->User->save($this->request->data)) {
			$user_id = $this->User->id;
			
			//ALTA DE Gimnasio
			$this->Gimnasio->create();
			$this->Gimnasio->set(array(
					'razonsocial'=>$this->request->data['User']['razonsocial'],
					'email'=>$this->request->data['User']['email'],
					'telefono'=>$this->request->data['User']['telefono'],
					'user_id'=>$user_id
			));
			$this->Gimnasio->save();
			//fin alta gimnasio
		
			//$this->enviaremailactivacion($user_id);
		    return $this->redirect(array('controller'=>'users','action' => 'enviaremailactivacion',$user_id));
		
		}
		$this->Session->setFlash('El usuario no pudo ser guardado. Por favor, intentar nuevamente.','success');

	}
}




public function add() {
	//$this->set('clientes',$this->User->Cliente->find('list',array('fields' => array('Cliente.apellidoynombre'))));
	$this->set('groups',$this->User->Group->find('list',array('fields' => array('Group.name'))));
	if ($this->request->is('post')) {
		$this->User->create();
		
		if ($this->User->save($this->request->data)) {
			$this->Session->setFlash(__('Guardado correctamente','success'));
			return $this->redirect(array('action' => 'add'));
		}
	
		$this->Session->setFlash('El usuario no pudo ser guardado. Por favor, intentar nuevamente.','success');
	
	}
}



public function editusuario() {
	
	$cliente_id = $this->Auth->user('cliente_id');
	if(!$cliente_id){
		throw new NotFoundException(__('Usuario no tiene Cliente asociado'));
	}
	
	//$Cliente = $this->Cliente->findById($cliente_id);
	//$this->set('registro', $Cliente);
	$this->set('cliente_id',$cliente_id);
	
	$id =$this->Auth->user('id');
	$this->User->id = $id;
	
	

	if (!$this->User->exists()) {
		throw new NotFoundException(__('Invalid user'));
	}
	
	if ($this->request->is('post') || $this->request->is('put')) {
	
	if ($this->User->save($this->request->data)) {
		//si viene de formulario SolicitarPedido => redirijo a solicitar pedido
	   $this->Session->setFlash(__('Guardado correctamente','success'));
	   //return $this->redirect(array('action' => 'editusuario'));
		
	}
	
} else {
	$this->request->data = $this->User->read(null, $id);
	unset($this->request->data['User']['password']);
	}
}

public function edit($id = null){	
if (!$id){	
	$id = $this->USER_ID;	
}		
$this->User->id = $id;		
if (!$this->User->exists())
{			
	throw new NotFoundException(__('Usuario Invalido'));	
}	
	$this->User->id = $id;	$this->set('groups',$this->User->Group->find('list',array('fields' => array('Group.name'))));	$this->set('form',$this->createform());	
	if ($this->request->is('post') || $this->request->is('put')) {
	
	if ($this->User->save($this->request->data)) {		$this->Session->setFlash(__('Actualizado  Correctamente','success'));
		return $this->redirect(array('action' => 'view'));
	}
	
} else {
	$this->request->data = $this->User->read(null, $id);
	unset($this->request->data['User']['password']);
	}
}



public function delete($id = null) {
	$this->request->onlyAllow('post');
	$this->User->id = $id;
	if (!$this->User->exists()) {
		throw new NotFoundException(__('Invalido'));
	}
	if ($this->User->delete()) {
		$this->Session->setFlash(__('Eliminado Correctamente','success'));
		return $this->redirect(array('action' => 'index'));
	}
	$this->Session->setFlash(__('No fue Eliminado','success'));
	return $this->redirect(array('action' => 'index'));
}



public function login() {

$this->layout='catalogo3';

if ($this->request->is('post')) {
	if ($this->Auth->login()) {
	
		 $user = $this->User->findById($this->Auth->user('id'));
		 
		 //Chequeo de activacion
		 if(!empty($user['User']['claveactivacion'])){
			//redirigir a aviso de activacion
			$this->Auth->logout();
			$this->Session->setFlash('Para Acceder al sitio debe realizar la Activacion de la Cuenta. 
			Por favor revise su Cuenta de Correo para la Activacion.','success');
			
			$this->redirect(array('action'=>'avisoactivacion'));
		 
		 }
		
		return $this->redirect(array('controller'=>'administrador','action' => 'index'));
	}
	$this->Session->setFlash('Usuario o Contrasenia Invalida','error');
}
}

public function logout() {
	return $this->redirect($this->Auth->logout());
}
	

public function createview(){	$form = array(			array('type'=>'label', 'value'=>$this->Auth->user('username'),  'label'=>'Username', 'input'=>'User.username'),			array('type'=>'label', 'value'=>$this->Auth->user('apellidoynombre'),  'label'=>'Apellido y Nombre', 'input'=>'User.apellidoynombre'),			array('type'=>'label', 'value'=>$this->Auth->user('email'),  'label'=>'Email', 'input'=>'User.email'),	);	return $form;}public function createform(){		$form = array(			array('type'=>'text',   'label'=>'Apellido y Nombre', 'input'=>'User.apellidoynombre'),			array('type'=>'text',   'label'=>'Email', 'input'=>'User.email'),				);		if( in_array ($this->USER_ROL ,array($this->ROL_ADMIN, $this->ROL_DESARROLLO))){		$form = array(				array('type'=>'text',   'label'=>'Username', 'input'=>'User.username'),								array('type'=>'select2',   'label'=>'Rol', 'input'=>'group_id'),				array('type'=>'text',   'label'=>'Apellido y Nombre', 'input'=>'User.apellidoynombre'),				array('type'=>'text',   'label'=>'Email', 'input'=>'User.email')				);	}		 	 return $form;	 }


public function view($id = null) {	
	if (!$id){		$id = $this->USER_ID;	}
	$this->User->id = $id;
	if (!$this->User->exists()) {
		throw new NotFoundException(__('Usuario Invalido'));
	}	$view = $this->createView();	$this->set('form',$view);	$this->set('linklistado','NO');
	$this->set('user', $this->User->read(null, $id));
}





}
	