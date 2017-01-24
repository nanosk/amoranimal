<?php

class AdministradoresController extends AppController 
{

	//copiar todo esto
	private $entity = 'Administradore';
	private $controller = 'Administradores';
	
	
public $helpers = array ('Html','Form');
public $components = array('Session','RequestHandler','Paginator','Cookie');
public $paginate = array('limit' => 20,
						'order' => array(
						            'Administradore.apellido' => 'asc'
						        )
					        );

public $botones = array(
		array( 'controller'=>'Administradores', 'action'=>'add', 'class'=>'btn btn-sm btn-flat btn-default', 'label'=>'Nuevo Administrador', 'icon'=>'fa fa-plus-circle' ),
		array( 'controller'=>'Administradores', 'action'=>'index', 'class'=>'btn btn-sm btn-flat btn-default', 'label'=>'Listado Administradores ', 'icon'=>'fa fa-list' ),
		
);




public function beforeFilter() {
	parent::beforeFilter();


	//Antes de cargar la vista se setean estas variables en el LOAD

	$this->filtros =  array(
			'controller'=>'Administradores',
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
			
	        array('type'=>'text',   'label'=>'Nombre', 'input'=>'nombre'),
	        array('type'=>'text',   'label'=>'Apellido', 'input'=>'apellido'),
		    array('type'=>'text',   'label'=>'Direccion', 'input'=>'direccion'),
	        array('type'=>'text',   'label'=>'Telefono', 'input'=>'telefono'),
	        array('type'=>'text',   'label'=>'Email', 'input'=>'email'),
	        array('type'=>'checkbox',   'label'=>'Activo', 'input'=>'activo')
			);
	return $form;
}

public function getConditions($filterdatarequest){
	$conditions= array();

	
	
	if(!empty($filterdatarequest['nombre'])){
		$conditions = $conditions + array('Administradore.nombre LIKE '=> '%'.$filterdatarequest['nombre'].'%');
	}
	
	return $conditions;
}

/*-------------------------------LISTADO INDEX-----------------------------------*/

function index() 
{
	
    $conditions = array();
	//filtro
	if ($this->request->is('post')) {
		$conditions = $this->getConditions($this->request->data['Administradores']);
	}
	
	$this->Paginator->settings = $this->paginate;
	if(isset($conditions)){
		$this->set('registros', $this->Paginator->paginate('Administradore',$conditions));
	}else{
	
		$this->set('registros', $this->Paginator->paginate('Administradore'));
		
		$conditions =null;
	}
	
	$this->set('conditions',$conditions);

	
	$this->set('registros',$this->paginate('Administradore',$conditions));

	
	
}


/*-------------------------------DETALLE-----------------------------------*/
public function view($id = null) 
{

	$this->Administradore->id = $id;
	$administrador = $this->Administradore->read();
	$this->set('Administradore', $administrador);

	if (!$this->request->data) {
		$this->request->data = $administrador;
	}
	$this->set('form',$this->createform());
}

/*-------------------------------ALTA-----------------------------------*/

public function add() {
	
	$this->set('users',$this->Administradore->User->find('list',array('fields'=>array('username'))));
	$this->set('form',$this->createform());
	
	if ($this->request->is('post')) {
		if ($this->Administradore->save($this->request->data)) {
			
			// crear nuevo usuario
			// asignar id a cliente
			$administrador_id = $this->Administradore->id;
			$username = $this->request->data['Administradore']['email'];
			$datos = array('username'=>$username,
					'password'=>'123',
					'group_id'=>$this->ROL_ADMIN
			);
			$this->User->create();
			$this->User->set($datos);
			$this->User->save();
			$user_id = $this->User->id;
			
			//Asignar usuario a Administrador
			$this->Administradore->set(array('user_id'=>$user_id));
			$this->Administradore->save();
			
			$this->Session->setFlash('Almacenado Correctamente','success');
			$this->redirect(array('action' => 'index'));
		}
	}
}

/*-------------------------------EDITAR-----------------------------------*/
public function edit($id = null) {

	$this->set('users',$this->Administradore->User->find('list',array('fields'=>array('username'))));
	$this->set('id',$id);
	$this->set('form',$this->createform());
	
	if (!$id) {
		throw new NotFoundException(__('Invalid post'));
	}

	$Administradore = $this->Administradore->findById($id);

	if (!$Administradore) {
		throw new NotFoundException(__('Invalid post'));
	}
	if ($this->request->is(array('post', 'put'))) {
		$this->Administradore->id = $id;
		if ($this->Administradore->save($this->request->data)) {
			$this->Session->setFlash('Actualizado Correctamente','success');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Registro Actualizado'));
	}
	if (!$this->request->data) {
		$this->request->data = $Administradore;
	}
}

/*-------------------------------ELIMINAR-----------------------------------*/
 function delete($id) {
	if (!$this->request->is('post')) {
		throw new MethodNotAllowedException();
	}
	if ($this->Administradore->delete($id)) {
		$this->Session->setFlash('Eliminado Correctamente','success');
		$this->redirect(array('action' => 'index'));
	}
}
	
	

}