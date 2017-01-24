<?php

class GroupsController extends AppController 
{

public $helpers = array ('Html','Form');
public $components = array('Session','RequestHandler','Paginator','Cookie');
public $paginate = array('limit' => 20,
						'order' => array(
						            'Group.id' => 'asc'
						        )
					        );
public $botones = array(
		array( 'controller'=>'Groups', 'action'=>'add', 'class'=>'btn btn-sm btn-flat btn-default', 'label'=>'Nuevo Grupo', 'icon'=>'fa fa-plus-circle' ),
		array( 'controller'=>'Groups', 'action'=>'index', 'class'=>'btn btn-sm btn-flat btn-default', 'label'=>'Listado Grupos ', 'icon'=>'fa fa-list' ),
		
);

//copiar todo esto
private $entity = 'Group';
private $controller = 'Groups';






public function beforeFilter() {
	parent::beforeFilter();


	//Antes de cargar la vista se setean estas variables en el LOAD

	$this->filtros =  array(
			'controller'=>'Groups',
			'action'=>'index',
			'parametros'=>array(
					array('input'=>'name','label'=>'Nombre','type'=>'text'),
					
			)
	);
	//$this->set('clientes', $this->Cliente->find('list',array('fields' =>array('Cliente.apellidoynombre'))));
	$this->set('botones',$this->botones);
	$this->set('datos', $this->filtros);


}


public function createform(){
	$form = array(
			array('type'=>'text',   'label'=>'Nombre de Grupo', 'input'=>'name'),
	     
	        
			);
	return $form;
}



public function getConditions($filterdatarequest){
	$conditions= array();
	if(!empty($filterdatarequest['name'])){
		$conditions = $conditions + array('Group.name LIKE '=> '%'.$filterdatarequest['name'].'%');
	}
	
	return $conditions;
}



public function index(){


	$conditions = array();
	//filtro
	if ($this->request->is('post')) {
		$conditions = $this->getConditions($this->request->data['Groups']);
	}
	
	$this->Paginator->settings = $this->paginate;
	if(isset($conditions)){
		$this->set('registros', $this->Paginator->paginate('Group',$conditions));
	}else{
	
		$this->set('registros', $this->Paginator->paginate('Group'));
		
		$conditions =null;
	}
	//$conditions =null;
	
}



public function view($id = null) 
{
	
	$this->Group->id = $id;
	$this->set('Group', $this->Group->read());
}

public function add() {
	
	$this->set('form',$this->createform());
	if ($this->request->is('post')) {
		if ($this->Group->save($this->request->data)) {
			$this->Session->setFlash('Grupo guardado.','success');
			$this->redirect(array('action' => 'index'));
		}
	}
}

public function edit($id = null) {
	
	$this->set('form',$this->createform());
	if (!$id) {
		throw new NotFoundException(__('Invalid post'));
	}
	$Group = $this->Group->findById($id);
	$this->set('registro',$Group);
	if (!$Group) {
		throw new NotFoundException(__('Invalid post'));
	}
	if ($this->request->is(array('post', 'put'))) {
		$this->Group->id = $id;
		if ($this->Group->save($this->request->data)) {
			$this->Session->setFlash('Grupo Actualizado Correctamente.','success');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Registro Actualizado','success');
	}
	if (!$this->request->data) {
		$this->request->data = $Group;
	}
}


 function delete($id) {
	if (!$this->request->is('post')) {
		throw new MethodNotAllowedException();
	}
	if ($this->Group->delete($id)) {
		$this->Session->setFlash('Grupo id: ' . $id . ' ha sido eliminado.','success');
		$this->redirect(array('action' => 'index'));
	}
}
	
	

}