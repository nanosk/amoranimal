<?php

class SociosController extends AppController 
{

	//copiar todo esto
	private $entity = 'Socio';
	private $controller = 'Socios';
	
	
public $helpers = array ('Html','Form','Js');
public $components = array('Session','RequestHandler','Paginator','Cookie');
public $paginate = array('limit' => 20,
						'order' => array(
						            'Socio.apellido' => 'asc'
						        )
					        );

public $botones = array(
		array( 'controller'=>'Socios', 'action'=>'add', 'class'=>'btn btn-sm btn-flat btn-default', 'label'=>'Nuevo Socio', 'icon'=>'fa fa-plus-circle' ),
		array( 'controller'=>'Socios', 'action'=>'index', 'class'=>'btn btn-sm btn-flat btn-default', 'label'=>'Listado Socios ', 'icon'=>'fa fa-list' ),
		
);




public function beforeFilter() {
	parent::beforeFilter();


	//Antes de cargar la vista se setean estas variables en el LOAD

	$this->filtros =  array(
			'controller'=>'Socios',
			'action'=>'index',
			'parametros'=>array(
					array('input'=>'nombre','label'=>'Nombre','type'=>'text'),
					
			)
	);
	//$this->set('clientes', $this->Cliente->find('list',array('fields' =>array('Cliente.apellidoynombre'))));
	$this->set('botones',$this->botones);
	$this->set('datos', $this->filtros);


}


public function createform(){
	$form = array(
			array('type'=>'text',   'label'=>'Nro Documento', 'input'=>'dni'),
	        array('type'=>'text',   'label'=>'Nombre', 'input'=>'nombre'),
	        array('type'=>'text',   'label'=>'Apellido', 'input'=>'apellido'),
		    array('type'=>'text',   'label'=>'Direccion', 'input'=>'direccion'),
	        array('type'=>'text',   'label'=>'Telefono', 'input'=>'telefono'),
	        array('type'=>'text',   'label'=>'Email', 'input'=>'email'),
			array('type'=>'select2',   'label'=>'Forma de Pago', 'input'=>'formapago_id'),
			array('type'=>'text',   'label'=>'Importe Cuota', 'input'=>'importe_cuota'),
	        array('type'=>'checkbox',   'label'=>'Activo', 'input'=>'activo'),
			);
	return $form;
}

public function getConditions($filterdatarequest){
	$conditions= array();

	
	
	if(!empty($filterdatarequest['nombre'])){
		$conditions = $conditions + array('Socio.nombre LIKE '=> '%'.$filterdatarequest['nombre'].'%');
	}
	
	return $conditions;
}

/*-------------------------------LISTADO INDEX-----------------------------------*/

function index() 
{
	
    $conditions = array();
	//filtro
	if ($this->request->is('post')) {
		$conditions = $this->getConditions($this->request->data['Socios']);
	}
	
	$this->Paginator->settings = $this->paginate;
	if(isset($conditions)){
		$this->set('registros', $this->Paginator->paginate('Socio',$conditions));
	}else{
	
		$this->set('registros', $this->Paginator->paginate('Socio'));
		
		$conditions =null;
	}
	
	$this->set('conditions',$conditions);

	
	$this->set('registros',$this->paginate('Socio',$conditions));

	
	
}


/*-------------------------------DETALLE-----------------------------------*/
public function view($id = null) 
{

	$this->Socio->id = $id;
	$socio = $this->Socio->read();
	$this->set('Socio', $socio);

	if (!$this->request->data) {
		$this->request->data = $socio;
	}
	$this->set('formapagos',$this->Socio->Formapago->find('list',array('fields'=>array('descripcion'))));
	$this->set('form',$this->createform());

}

/*-------------------------------ALTA-----------------------------------*/

public function add() {
	
	
	$this->set('formapagos',$this->Socio->Formapago->find('list',array('fields'=>array('descripcion'))));
	$this->set('form',$this->createform());
	
	if ($this->request->is('post')) {
		if ($this->Socio->save($this->request->data)) {
			
			
			// crear nuevo usuario
			// asignar id a cliente
			$socio_id = $this->Socio->id;
			$username = $this->request->data['Socio']['email'];
			$datos = array('username'=>$username,
					'password'=>'123',
					'group_id'=>$this->ROL_SOCIO
			);
			$this->User->create();
			$this->User->set($datos);
			$this->User->save();
			$user_id = $this->User->id;
			
			//Asignar usuario a Administrador
			$this->Socio->set(array('user_id'=>$user_id));
			$this->Socio->save();
			
			
			$this->Session->setFlash('Almacenado Correctamente','success');
			$this->redirect(array('action' => 'index'));
		}
	}
}

/*-------------------------------EDITAR-----------------------------------*/
public function edit($id = null) {

	$this->set('formapagos',$this->Socio->Formapago->find('list',array('fields'=>array('descripcion'))));
	
	$this->set('id',$id);
	$this->set('form',$this->createform());
	
	if (!$id) {
		throw new NotFoundException(__('Invalid post'));
	}

	$Socio = $this->Socio->findById($id);

	if (!$Socio) {
		throw new NotFoundException(__('Invalid post'));
	}
	if ($this->request->is(array('post', 'put'))) {
		$this->Socio->id = $id;
		if ($this->Socio->save($this->request->data)) {
			$this->Session->setFlash('Actualizado Correctamente','success');
			return $this->redirect(array('action' => 'index'));
		}
		
	}
	if (!$this->request->data) {
		$this->request->data = $Socio;
	}
}

/*-------------------------------ELIMINAR-----------------------------------*/
 function delete($id) {
	if (!$this->request->is('post')) {
		throw new MethodNotAllowedException();
	}
	if ($this->Socio->delete($id)) {
		$this->Session->setFlash('Eliminado Correctamente','success');
		$this->redirect(array('action' => 'index'));
	}
}
	
	

}