<?php

App::import('Vendor', 'mercadopago');

class PaginasController extends AppController 
{
	
public $helpers = array ('Html','Form','Js');
public $components = array('Session','RequestHandler','Paginator');
public $uses = array('Promo','Comercio','Socio');



 



function beforeFilter() {
	parent::beforeFilter();
	$this->Auth->allow('index','galeria','accesodenegado');
} 



function consultasocio($dni=null){
	$form = array(
		    array('type'=>'text',   'label'=>'Ingresar DNI:', 'input'=>'dni'),
	      );
		  
		  
	if ($this->request->is('post')) {
		
		
		
		
		$socio = $this->Socio->findByDni($this->request->data['Pagina']['dni']);
		if ($socio){
			$this->set('socio', $socio) ;
		}else{
			$this->Session->setFlash('No existe socio para DNI ingresado','info');
		}
		
	}		
	$this->set('form', $form) ;
	
	
}

function accesodenegado(){
	$this->layout = 'AdminLTE2_advertencia'; 
	
}

function promociones($id=null)
{
	$this->layout = 'catalogo3';
	
	if($this->request->is('post')){
		$filtro = $this->request->data['Pagina']['filtro'];
        $this->set('palabraclave', $filtro);
	
	}
	
	   if(isset($filtro) and $filtro !=""){
	       //si viene por post, y ademas el filtro tiene valor
	       $this->Paginator->settings = $this->paginate;
       	   $Promos = $this->Paginator->paginate('Promo', array(' descripcion LIKE' => '%'.$filtro.'%'));
	   }else{
	       //si filtro es nada, entonces no se tiene en cuenta
	       $this->Paginator->settings = $this->paginate;
	       
		   if ($id>0 ){
           		$Promos = $this->Paginator->paginate('Promo', array('comercio_id' => $id));
	       }else{
	       	$Promos = $this->Paginator->paginate('Promo');
	       }
	   }
	   
	   
	$this->set('comercios',$this->Comercio->find('all'));
    $this->set('Promos', $Promos);
    
}    
    
public function error(){ }


public function index() {
	$this->layout = 'catalogo3';

	$this->set('Promos',$this->Promo->find('all', array('limit'=>8,'order'=>array('Promo.created'=>'DESC'))));
   
	
    $this->set('USER_ID',$this->Auth->user('id'));
	
	
}




public function administrador()
{
    $this->set('USER_ID',$this->Auth->user('id'));
   	$USER_LOGIN =$this->Auth->user('username');
   	
	$USER_IMG =  'user2.png';
   	$this->set('USER_LOGIN',$USER_LOGIN);
	$this->set('USER_IMG',$USER_IMG);
	$this->set('user',$this->Auth->user);

   
}

function nosotros()
{
    $this->layout = 'bootstrap3';
	$this->set('title_for_layout','Nosotros');
	//0
	$conditions=array('conditions' => array('codigo ' => "empresanombre"));
	$datos[]= $this->Empresadato->find('all',$conditions);
	
	//1
	$conditions=array('conditions' => array('codigo ' => "nosotros"));
	$datos[]= $this->Empresadato->find('all',$conditions);
	
	
	
	$this->set('datos', $datos);

	
	
}


function micuenta(){
	$this->layout = 'bootstrap3';
	$this->set('title_for_layout','Mi Cuenta');
	$this->set('user_id',  $this->Auth->user('id'));
	
	//FIN armado de barra de navegacion
	//this->Auth->user('id');
	$usuario=$this->User->find('all',array('conditions'=>array('id'=>$this->Auth->user('id'))) );
	$this->set('usuario',  $usuario);

}


function contacto()
{
	$this->layout = 'bootstrap3';
	
	
	  
	    
		$this->set('user_id', $this->Auth->user('id'));
		$this->set('username',$this->Auth->user('username'));
		$this->set('email',$usuario['User']['email']); 
		$this->set('user_role',$this->Auth->user('role'));
		$this->set('admin_id', $this->ADMIN_ID);
		$this->set('CONS_GENERAL', $this->CONS_GENERAL);
	
	if ($this->request->is('post')) {   
		$this->set('mensaje', 'Consulta generada correctamente');
	}
     
}
}