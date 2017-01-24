<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller','String', 'Utility', 'CakeTime','CakeEmail', 'Network/Email','SimplePasswordHasher');


/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
public $uses = array('User','Modulo','Modulogroup','Group');


	public $components = array('Export.Export','Session'
			,'Acl','Auth' => array(
					'loginRedirect' => array(
							'controller' => 'paginas',
							'action' => 'administrador'
					),
					'logoutRedirect' => array(
							'controller' => 'paginas',
							'action' => 'index'),
					'authorize' => 
						array('Controller')
						//array('Actions' => array('actionPath' => 'controllers')))
	));
	

//***** VARIABLES GLOBALES ******///

	// VARIBLES DE USUARIO
	var $ROL_DESARROLLO = 1;
	var $ROL_ADMIN = 2 ;
	var $ROL_COMERCIO = 3;
	var $ROL_SOCIO = 4;

	
	var $datosempresa = array('razonsocial'=>'El Lechero ', 'direccion'=>'1Er Entrerriano 310','telefono'=>'03444-44-xxxx','email'=>'contacto@ellechero.com','web'=>'www.ellechero.com.ar' );
	
	var $USER_IMG ='user.jpg';
	
	//DATOS DEL USUARIO LOGUEADO
	var $USER_LOGIN = ''; //es el username de la tabla USERS
	var $USER_ROL;   //es el group_id de la tabla Groups
	var $USER_ID;    //es el id de la tabla Users
	
	
	//VARIABLES DE ESTADOS
	var $PENDIENTE = 1;
	var $PAGADO    = 2;
	var $ENVIADO   = 3;
	var $RECHAZADO = 4;
	var $CONFORME  = 5;
	var $AEXPORTAR = 7;
	var $VISITADO  = 8;
	var $MESES  = array();
	var $DIAS = array();
	var $ITEMTODOS = array('0'=>'TODOS');
	
	//VARIABLES
	var $MENSAJE;
	
	//VARIABLES USADAS EN EL ACTION BUTTON para determinar si en la lista Index los botones action pueden ADD EDIT o VIEW
	var $ACTION_CAN_ADD= 0 ;
	var $ACTION_CAN_EDIT = 0 ;
	var $ACTION_CAN_DELETE= 0 ;

//========== Seguridad y permisos ===================

/*
public function isAuthorized($user) {
	return true;
}
*/

public function isAuthorized($user) {
	$group_id   = $this->Auth->user('group_id');
	$controller = strtoupper($this->name);
	$action     = strtoupper($this->action);
	
	$respuesta  = $this->checkPermiso();
	
//	$debug = array('1'=>$controller, 'action'=>$action, '2'=>$group_id,'tienepermiso'=>$respuesta);
//	$this->set('debug',$debug);
	
	if( in_array ($group_id ,array($this->ROL_ADMIN, $this->ROL_DESARROLLO))){
		$respuesta = true;
	}

	if (!$respuesta){
		$this->Session->setFlash('USUARIO NO TIENE PERMISOS '. $controller. ' - '. $action,'error');
		$this->redirect(array('controller'=>'paginas', 'action'=>'accesodenegado'));
	}
	
	return $respuesta;
	
}



public function  checkPermiso($group_id= null,$controller= null, $action= null){
	
	
	//recibe grupo de usuario y controlador / vista
	$group_id   = $this->Auth->user('group_id');
	$controller = strtoupper($this->name);
	if(!isset($action)){
		$action     = strtoupper($this->action);
	}
	
	$modulo = '';
	$modulo = $this->Modulo->find('all',array('conditions'=>array('controller'=>$controller, 'action'=>$action)));

	if(!empty($modulo)){

		$permiso = $this->Modulogroup->find('all',array('conditions'=>array( 'tienepermiso'=>true, 'group_id'=>$group_id, 'modulo_id'=>$modulo[0]['Modulo']['id'])));

		if($permiso){
			
			
			return true;
		}else{
			
			return false;

		}

	}

}


//========== Fin Seguridad y permisos ===================


public function beforeFilter() {
	
	

	/*
	$this->Auth->authorize = 'actions';
	$this->Auth->actionPath = 'controllers/';
	*/
	$this->set('b_filtros',true);//opcion que activa que apareza el filtro a la derecha 
	
	//ESTADOS
	$this->set('PENDIENTE',$this->PENDIENTE);
	$this->set('PAGADO',   $this->PAGADO);
	$this->set('ENVIADO',  $this->ENVIADO);
	$this->set('RECHAZADO',$this->RECHAZADO);
	$this->set('CONFORME', $this->CONFORME);
	$this->set('AEXPORTAR',$this->AEXPORTAR);
	$this->set('VISITADO', $this->VISITADO);


	

	
	//VARIARBLE PARA ACTIONS

	$group_id   = $this->Auth->user('group_id');
	$controller = strtoupper($this->name);
	
	if($this->checkPermiso($group_id,$controller, 'ADD'))	{
		$this->ACTION_CAN_ADD = 1; 
		
	}
	if($this->checkPermiso($group_id,$controller,'EDIT'))	{
		$this->ACTION_CAN_EDIT = 1; 
	}
	if($this->checkPermiso($group_id,$controller,'DELETE'))	{
		$this->ACTION_CAN_DELETE = 1; 
	}
	
	
	if( in_array ($this->Auth->user('group_id') ,array( $this->ROL_DESARROLLO))){
		
		$this->ACTION_CAN_ADD = 1; 
		$this->ACTION_CAN_EDIT = 1; 
		$this->ACTION_CAN_DELETE = 1; 
	}
	$this->set('ACTION_CAN_DELETE', $this->ACTION_CAN_DELETE);	
	$this->set('ACTION_CAN_EDIT', $this->ACTION_CAN_EDIT);
	$this->set('ACTION_CAN_ADD', $this->ACTION_CAN_ADD);
	
	

	//Imagen de Perfil de Usuario  de USUARIO
	$this->USER_IMG = 'user2.png';

	//Datos de USUARIO
	$this->USER_LOGIN = 'Visitante';
	$this->USER_ROLE = 0 ;

	
   
	$this->set('user',$this->Auth->user());
	$user = null;
	if ($this->Auth->user('id') > 0 ){

		$this->USER_LOGIN =$this->Auth->user('username');

		$this->USER_ROL = $this->Auth->user('group_id');

		$this->USER_ID = $this->Auth->user('id');
		$user = $this->Auth->user;
		

	}

	//debug($this->USER_LOGIN);
	$this->set('USER_LOGIN',$this->USER_LOGIN);
	$this->set('USER_ROL',$this->USER_ROL);
	$this->set('USER_ID', $this->USER_ID);
	$this->set('USER_IMG',$this->USER_IMG);
	$this->set('user',$user);
	

	

	//ROLES
	$this->set('ROL_DESARROLLO',$this->ROL_DESARROLLO);
	$this->set('ROL_ADMIN',$this->ROL_ADMIN);
	$this->set('ROL_COMERCIO',$this->ROL_COMERCIO);
	

	
	
	//debug($this->USER_LOGIN);
	$this->set('USER_ID',$this->USER_ID);
	$this->set('USER_LOGIN',$this->USER_LOGIN);
	$this->set('USER_ROLE',$this->USER_ROLE);
	$this->set('USER_ADMIN',$this->USER_ADMIN);
	$this->set('USER_CLIENTE',$this->USER_CLIENTE);
	$this->set('USER_ROLE_DESC',$this->USER_ROLE_DESC);
	//
	
	
	
	
	/*meses: se carga la variable para ser  usada en las vistas y mostra el nombre del mes en vez del numero */
	$meses = array(
			1=>'Enero',
			2=>'Febrero',
			3=>'Marzo',
			4=>'Abril',
			5=>'Mayo',
			6=>'Junio',
			7=>'Julio',
			8=>'Agosto',
			9=>'Septiembre',
			10=>'Octubre',
			11=>'Noviembre',
			12=>'Diciembre');
	$this->set('meses',$meses);
	$this->MESES = $meses;
	
	
	if ($this->Auth->user('group_id')==$this->ROL_DESARROLLO  ){
		 $this->layout = 'AdminLTE2_superadmin';
	}

	if ($this->Auth->user('group_id')==$this->ROL_ADMIN  ){
		 $this->layout = 'AdminLTE2_admin';
	}
	
	
	if ($this->Auth->user('group_id')==$this->ROL_COMERCIO){
		
		$this->layout = 'AdminLTE2_comercio';
	}
	
	if ($this->Auth->user('group_id')==$this->ROL_SOCIO){
		
		$this->layout = 'AdminLTE2_socio';
	}
	
	if ($this->Auth->user('id') < 1){
		
		$this->layout = 'AdminLTE2';
	}
	
	
   
/*
	  if(!($this->name =='users' && $this->action =='avisoactivacion' )){
	 	 $user = $this->User->findById($this->Auth->user('id'));
		 //Chequeo de activacion
		 if(!empty($user['User']['claveactivacion'])){
			//redirigir a aviso de activacion
			
			$this->Session->setFlash('Cuenta Registrada Correctamente.
			Para Acceder al sitio debe realizar la Activasion de la Cuenta. 
			Por favor revise su Cuenta de Correo para la Activacion.','success');
			
			$this->redirect(array('controller'=>'users', 'action'=>'avisoactivacion'));
		 
		 }
		}
		*/
	
}


function FPENVIAREMAIL($to, $subject,$template,$sendas,$mensajeflash = 'Email enviado Correctamente',$redirect = null){

		$this->Email->delivery = 'smtp';
		//$this->Email->delivery = 'debug';
		$this->Email->from    = 'AMORANIMAL<ezgatrabajo@gmail.com>';
		$this->Email->to      = $to;
		$this->Email->subject = $subject;
		$this->Email->template = $template;
		$this->Email->sendAs = $sendas;		
		$this->set('smtp_errors', $this->Email->smtpError);
	
		
		if ($this->Email->send())
		{
			$this->Session->setFlash($mensajeflash,'success');
			if($redirect){
				$this->redirect($redirect);
			}
		}else{
			$this->Session->setFlash('Error al Enviar el Email','error');
		}
		
}
	


	
	
}
