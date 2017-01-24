<?php

class ComerciosController extends AppController 
{

	//copiar todo esto
	private $entity = 'Comercio';
	private $controller = 'Comercios';
	
	
public $helpers = array ('Html','Form');
public $components = array('Session','RequestHandler','Paginator','Cookie');
public $paginate = array('limit' => 20,
						'order' => array(
						            'Comercio.apellido' => 'asc'
						        )
					        );

public $botones = array(
		array( 'controller'=>'Comercios', 'action'=>'add', 'class'=>'btn btn-sm btn-flat btn-default', 'label'=>'Nuevo Comercio', 'icon'=>'fa fa-plus-circle' ),
		array( 'controller'=>'Comercios', 'action'=>'index', 'class'=>'btn btn-sm btn-flat btn-default', 'label'=>'Listado Comercios ', 'icon'=>'fa fa-list' ),
		
);




public function beforeFilter() {
	parent::beforeFilter();


	//Antes de cargar la vista se setean estas variables en el LOAD

	$this->filtros =  array(
			'controller'=>'Comercios',
			'action'=>'index',
			'parametros'=>array(
					array('input'=>'razon_social','label'=>'Razon Social','type'=>'text'),
					
			)
	);
	//$this->set('clientes', $this->Cliente->find('list',array('fields' =>array('Cliente.apellidoynombre'))));
	$this->set('botones',$this->botones);
	$this->set('datos', $this->filtros);


}


public function createform(){
	$form = array(
			
			array('type'=>'hidden',   'label'=>'id', 'input'=>'id'),
			array('type'=>'file',   'label'=>'Logo', 'input'=>'Comercio.logo'),
			
			array('type'=>'text',   'label'=>'Razon Social', 'input'=>'razon_social'),
	        array('type'=>'text',   'label'=>'Email', 'input'=>'email'),
			array('type'=>'text',   'label'=>'Nombre Titular', 'input'=>'nombre_titular'),
	        array('type'=>'text',   'label'=>'Apellido Titular', 'input'=>'apellido_titular'),
	        array('type'=>'text',   'label'=>'Direccion', 'input'=>'direccion'),
	        array('type'=>'text',   'label'=>'Telefono', 'input'=>'telefono'),
	       
	        array('type'=>'checkbox',   'label'=>'Activo', 'input'=>'activo'),
			);
	return $form;
}

public function getConditions($filterdatarequest){
	$conditions= array();

	
	
	if(!empty($filterdatarequest['razon_social'])){
		$conditions = $conditions + array('Comercio.razon_social LIKE '=> '%'.$filterdatarequest['razon_social'].'%');
	}
	
	return $conditions;
}

/*-------------------------------LISTADO INDEX-----------------------------------*/

function index() 
{
	
    $conditions = array();
	//filtro
	if ($this->request->is('post')) {
		$conditions = $this->getConditions($this->request->data['Comercios']);
	}
	
	$this->Paginator->settings = $this->paginate;
	if(isset($conditions)){
		$this->set('registros', $this->Paginator->paginate('Comercio',$conditions));
	}else{
	
		$this->set('registros', $this->Paginator->paginate('Comercio'));
		
		$conditions =null;
	}
	
	$this->set('conditions',$conditions);

	
	$this->set('registros',$this->paginate('Comercio',$conditions));

	
	
}


/*-------------------------------DETALLE-----------------------------------*/
public function view($id = null) 
{
	$this->Comercio->id = $id;
	$comercio = $this->Comercio->read();
	$this->set('Comercio', $comercio);

	if (!$this->request->data) {
		$this->request->data = $comercio;
	}
	$this->set('form',$this->createform());

}

/*-------------------------------ALTA-----------------------------------*/

public function add(){
	
	$this->set('users',$this->Comercio->User->find('list',array('fields'=>array('username'))));
	$this->set('form',$this->createform());
	
	if ($this->request->is('post')) {
		if ($this->Comercio->save($this->request->data)) {
			
			// crear nuevo usuario
			// asignar id a comercio
			$id = $this->Comercio->id;
			$username = $this->request->data['Comercio']['email'];
			$datos = array('username'=>$username,
					'password'=>'123',
					'group_id'=>$this->ROL_COMERCIO
			);
			$this->User->create();
			$this->User->set($datos);
			$this->User->save();
			$user_id = $this->User->id;
			
			//Asignar usuario a Comercio
			$this->Comercio->set(array('user_id'=>$user_id));
			$this->Comercio->save();
			
			$this->Session->setFlash('Almacenado Correctamente','success');
			$this->redirect(array('action' => 'index'));
		}
	}
}

/*-------------------------------EDITAR-----------------------------------*/
public function edit($id = null) {

	$this->set('users',$this->Comercio->User->find('list',array('fields'=>array('username'))));
	$this->set('id',$id);
	$this->set('form',$this->createform());
	
	if (!$id) {
		throw new NotFoundException(__('Invalid post'));
	}

	$Comercio = $this->Comercio->findById($id);

	if (!$Comercio) {
		throw new NotFoundException(__('Invalid post'));
	}
	if ($this->request->is(array('post', 'put'))) {
		$this->Comercio->id = $id;
		if ($this->Comercio->save($this->request->data)) {
			$this->Session->setFlash('Actualizado Correctamente','success');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Registro Actualizado'));
	}
	if (!$this->request->data) {
		$this->request->data = $Comercio;
	}
}

/*-------------------------------ELIMINAR-----------------------------------*/
 function delete($id) {
	if (!$this->request->is('post')) {
		throw new MethodNotAllowedException();
	}
	if ($this->Comercio->delete($id)) {
		$this->Session->setFlash('Eliminado Correctamente','success');
		$this->redirect(array('action' => 'index'));
	}
}
	
	

}