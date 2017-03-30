<?php 

class GestionemailComponent extends Component {
    // the other component your component uses
public $uses = array('User','Administradore', 'Socio','Comercio');
public $components = array('Cookie','Session','RequestHandler','Paginator','Email');



public function crearclaveactivacion(){
	
	$clave = '';
	//CREAR CLAVE PARA ACTIVACION 
	$clave = 'X1BWQ2';
	$clave = rand(5, 1000);
	$passwordHasher = new SimplePasswordHasher();
	$clave = $passwordHasher->hash($clave);
	
	return $clave;
}
    
function enviaremailactivacion($user_id = null){
	//try
		//Asignar valor a variables
		//VALIDAR USUARIO
		$user = $this->User->findById($user_id);
		$this->User->id = $user_id;
		if (!$this->User->exists()) {	
			throw new NotFoundException(__('Usuario invalido'));
		}
		
		$item = null;
		//DEPENDIENDO EL ROL
		switch ($user['User']['group_id']) {
			case $this->ROL_ADMIN:
				$item = $this->Administradore->findByUserId($user_id);
				break;
			
			case $this->ROL_SOCIO:
				$item = $this->Socio->findByUserId($user_id);
				break;
			
			case $this->ROL_COMERCIO:
				$item = $this->Comercio->findByUserId($user_id);
				break;
			
			default:
				// code...
				break;
		}
		
		//Se arma este link con clave de activacion.
		//LUEGO en la funcion "Clave activacion", se compara el parametro con  el dato de Users.claveactivacion
		$link = "http://amoranimalfer-adaptiveware.c9users.io/users/activacion/". $user['User']['claveactivacion'];
		$pass = $this->Cookie->read('password');

		//Setear variables que seran vistas en el Email.
		$this->set('item',$item);
		$this->set('user',$user);
		$this->set('link',$link);
		$this->set('pass', $pass);
		
		//PARAMETROS DE EMAIL
		$to       = $user['User']['email'];
		$template = 'enviaremailactivacion';
		$sendAs   = 'text';		
		$subject  = 'Activacion de la cuenta';
		$mensajeflash = "Cuenta Registrada Correctamente. Para Acceder al sitio debe realizar la Activasion de la Cuenta. Por favor revise su Cuenta de Correo para la Activacion.";
		$redirect = array('action'=>'avisoactivacion');
		$this->FPENVIAREMAIL($to, $subject,$template,$sendAs,$mensajeflash,$redirect);
		
    }
    
public function FPENVIAREMAIL($to, $subject,$template,$sendas,$mensajeflash = 'Email enviado Correctamente',$redirect = null){

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

?>