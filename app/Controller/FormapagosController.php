<?php

class FormapagosController extends AppController 
{

	//copiar todo esto
	private $entity = 'Formapago';
	private $controller = 'Formapagos';
	
	
public $helpers = array ('Html','Form');
public $components = array('Session','RequestHandler','Paginator','Cookie');
public $paginate = array('limit' => 15,
						'order' => array(
						            'Formapago.apellido' => 'asc'
						        )
					        );

public $botones = array(
		array( 'controller'=>'Formapagos', 'action'=>'add', 'class'=>'btn btn-sm btn-flat btn-default', 'label'=>'Nuevo Forma de Pago', 'icon'=>'fa fa-plus-circle' ),
		array( 'controller'=>'Formapagos', 'action'=>'index', 'class'=>'btn btn-sm btn-flat btn-default', 'label'=>'Listado Formas de Pago ', 'icon'=>'fa fa-list' ),
		
);




public function beforeFilter() {
	parent::beforeFilter();


	//Antes de cargar la vista se setean estas variables en el LOAD

	$this->filtros =  array(
			'controller'=>'Formapagos',
			'action'=>'index',
			'parametros'=>array(
					array('input'=>'descripcion','label'=>'Descripcion','type'=>'text'),
				
					
			)
	);
	//$this->set('clientes', $this->Cliente->find('list',array('fields' =>array('Cliente.apellidoynombre'))));
	$this->set('botones',$this->botones);
	$this->set('datos', $this->filtros);


}


public function createform(){
	$form = array(
	        array('type'=>'text',   'label'=>'Descripcion', 'input'=>'descripcion'),
	        array('type'=>'checkbox',   'label'=>'Activo', 'input'=>'activo'),
			);
	return $form;
}

public function getConditions($filterdatarequest){
	$conditions= array();

	
	
	if(!empty($filterdatarequest['descripcion'])){
		$conditions = $conditions + array('Formapago.descripcion LIKE '=> '%'.$filterdatarequest['descripcion'].'%');
	}
	
	return $conditions;
}

/*-------------------------------LISTADO INDEX-----------------------------------*/

function index() 
{
	
    $conditions = array();
	//filtro
	if ($this->request->is('post')) {
		$conditions = $this->getConditions($this->request->data['Formapagos']);
	}
	
	$this->Paginator->settings = $this->paginate;
	if(isset($conditions)){
		$this->set('registros', $this->Paginator->paginate('Formapago',$conditions));
	}else{
	
		$this->set('registros', $this->Paginator->paginate('Formapago'));
		
		$conditions =null;
	}
	$this->set('conditions',$conditions);
	$this->set('registros',$this->paginate('Formapago',$conditions));

	
	
}


/*-------------------------------DETALLE-----------------------------------*/
public function view($id = null) 
{
	
	
	$this->Formapago->id = $id;
	$item = $this->Formapago->read();
	$this->set('Formapago', $item);

	if (!$this->request->data) {
		$this->request->data = $item;
	}
	$this->set('form',$this->createform());
	
}

/*-------------------------------ALTA-----------------------------------*/

public function add() {
	
	
	$this->set('form',$this->createform());
	
	if ($this->request->is('post')) {
		if ($this->Formapago->save($this->request->data)) {
			$this->Session->setFlash('Almacenado Correctamente','success');
			$this->redirect(array('action' => 'index'));
		}
	}
}

/*-------------------------------EDITAR-----------------------------------*/
public function edit($id = null) {

	
	$this->set('id',$id);
	$this->set('form',$this->createform());
	
	if (!$id) {
		throw new NotFoundException(__('Invalid post'));
	}

	$Formapago = $this->Formapago->findById($id);

	if (!$Formapago) {
		throw new NotFoundException(__('Invalid post'));
	}
	if ($this->request->is(array('post', 'put'))) {
		$this->Formapago->id = $id;
		if ($this->Formapago->save($this->request->data)) {
			$this->Session->setFlash('Actualizado Correctamente','success');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Registro Actualizado'));
	}
	if (!$this->request->data) {
		$this->request->data = $Formapago;
	}
}

/*-------------------------------ELIMINAR-----------------------------------*/
 function delete($id) {
	if (!$this->request->is('post')) {
		throw new MethodNotAllowedException();
	}
	if ($this->Formapago->delete($id)) {
		$this->Session->setFlash('Eliminado Correctamente','success');
		$this->redirect(array('action' => 'index'));
	}
}
	
	

}