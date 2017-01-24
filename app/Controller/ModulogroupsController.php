<?php

class ModulogroupsController extends AppController 
{

public $helpers = array ('Html','Form');
public $components = array('Session','RequestHandler','Paginator','Cookie');
public $uses = array('Modulogroup','Modulo','Group');
public $paginate = array('limit' => 20,
						'order' => array(
						            'Modulogroup.group_id' => 'asc'
						        )
					        );

//copiar todo esto
private $entity = 'Modulogroup';
private $controller = 'Modulogroups';



public $botones = array(
		array( 'controller'=>'Modulogroups', 'action'=>'add', 'class'=>'btn btn-sm btn-flat btn-default', 'label'=>'Nuevo Permiso', 'icon'=>'fa fa-plus-circle' ),
		array( 'controller'=>'Modulogroups', 'action'=>'index', 'class'=>'btn btn-sm btn-flat btn-default', 'label'=>'Listado Permisos ', 'icon'=>'fa fa-list' ),
		array( 'controller'=>'Modulogroups', 'action'=>'eliminarpermisos', 'class'=>'btn btn-sm btn-flat btn-default', 'label'=>'Eliminar Permisos de un Grupo', 'icon'=>'fa fa-plus-circle' ),
		array( 'controller'=>'Modulogroups', 'action'=>'asignarpermisos', 'class'=>'btn btn-sm btn-flat btn-default', 'label'=>'Asignar todos los Permisos a un Grupo ', 'icon'=>'fa fa-list' ),
		
);

public function createform(){

	$form = array(
				array('type'=>'select2', 'label'=>'Rol','input'=>'group_id'),
				array('type'=>'select2', 'label'=>'Modulo','input'=>'modulo_id')
				
			);
			
	return $form;
}

public function beforeFilter() {
	parent::beforeFilter();


	//Antes de cargar la vista se setean estas variables en el LOAD

	$this->filtros =  array(
			'controller'=>'Modulogroups',
			'action'=>'index',
			'parametros'=>array(
					array('input'=>'group_id','label'=>'Grupo de Usuario','type'=>'select2'),
					array('input'=>'controller','label'=>'Modulo','type'=>'text'),
					
			)
	);
	$this->set('botones',$this->botones);
	$this->set('datos', $this->filtros);


}
public function getConditions($filterdatarequest){
	$conditions= array();
	if(!empty($filterdatarequest['group_id'])){
		$conditions = $conditions + array('Modulogroup.group_id '=> $filterdatarequest['group_id']);
	}
	if(!empty($filterdatarequest['controller'])){
		$conditions = $conditions + array('Modulo.controller LIKE '=> '%'. $filterdatarequest['controller'].'%');
		
	}
	return $conditions;
}

function eliminarpermisos(){
	
	
	$this->set('groups',$this->Modulogroup->Group->find('list', array('fields' => array('Group.name'))));	
	$form = array(
				 array('type'=>'select2', 'label'=>'Rol','input'=>'group_id'),
			);
	$this->set('form',$form);
	
	if ($this->request->is('post')) {
		$group_id = 		$this->request->data['Modulogroup']['group_id'];
		$this->Modulogroup->query("delete from modulogroups where group_id = $group_id");
		$this->Session->setFlash('Se eliminaron los registros','success');
		$this->redirect(array('action' => 'index'));
	}
}



function asignarpermisos(){
	/* 
	ESTA FUNCION ASIGNA PERMISOS A TODOS LOS MODULOS PARA UN ROL EN PARTICULAR
	*/
	//$this->autorender = false;
	
	//seleccionar usuario
	
	//Buscar todos los modulos
	//recorrer uno a uno y 
	
	$group_id = 0;
	$this->set('groups',$this->Modulogroup->Group->find('list', array('fields' => array('Group.name'))));	
	$form = array(
				array('type'=>'select2', 'label'=>'Rol','input'=>'group_id'),
				//array('type'=>'select2','values'=>array('SI','NO'), 'label'=>'Regenerar Permisos','input'=>'regenerar')
			);
			
	$this->set('form',$form );
	
	if ($this->request->is('post')) {
		
		$group_id    = $this->request->data['Modulogroup']['group_id'];
	
		$registros = array();
		$result = $this->Modulo->find('all');	
		$debug = array('group_id'=>$group_id);
		$this->set('debug',$debug);
		
		if($result){
			
			
			
			foreach ($result as $item){
				$modulo_id  = $item['Modulo']['id'];
				// si no existe se da de alta
				$r = $this->Modulogroup->find('all',array('conditions'=>array('Modulogroup.modulo_id' => $modulo_id, 'Modulogroup.group_id' =>$group_id)));
				//debug($r);
				if(!$r){
					$registro = array( 'modulo_id' => $modulo_id, 'group_id' =>$group_id);
					$registros = $registros + $registro;
					$this->Modulogroup->create($registro);
					$this->Modulogroup->save();
			
					
				}
				
				//debug( $registro);
			}
		}	
		
		$this->Session->setFlash('Todos los permisos asignados al rol','success');	
		//$this->redirect(array('action' => 'index'));
	}		
	
	
	
}



public function index() 
{
	$this->set('groups',array(''=>'TODOS') + $this->Group->find('list', array('fields' => array('Group.name'))));	
	
	$conditions = array();
	//filtro
	if ($this->request->is('post')) {
		$conditions = $this->getConditions($this->request->data['Modulogroups']);
	}
	
	$this->Paginator->settings = $this->paginate;
	if(isset($conditions)){
		$this->set('registros', $this->Paginator->paginate('Modulogroup',$conditions));
	}else{
	
		$this->set('registros', $this->Paginator->paginate('Modulogroup'));
		
		$conditions =null;
	}
	
	$this->set('conditions',$conditions);

	
	
}



public function view($id = null) 
{
	
	$this->Modulogroup->id = $id;
	$this->set('Modulogroup', $this->Modulogroup->read());
}

public function add() {
	$this->set('groups',$this->Modulogroup->Group->find('list', array('fields' => array('Group.name'))));	
	$this->set('modulos',$this->Modulo->find('list', array('fields' => array('Modulo.cmbtexto1'))));	
	
	$this->set('form',$this->createform());
	if ($this->request->is('post')) {
		$modulo_id = $this->request->data['Modulogroup']['modulo_id'];
		$group_id = $this->request->data['Modulogroup']['group_id'];
		
		//$r = $this->Modulogroup->find('all',array('modulo_id'=> $modulo_id,'group_id'=> $group_id));
		//f ($r){
		//	$this->Session->setFlash('Ya existe el Permiso para el Rol','success');
	//		return false;
	//	}
		
		if ($this->Modulogroup->save($this->request->data)) {
			$this->Session->setFlash('Guardado correctamente ','success');
			//$this->redirect(array('action' => 'index'));
		}
	}
}

public function edit($id = null) {

	$this->set('form',$this->createform());
	if (!$id) {
		throw new NotFoundException(__('Invalid post'));
	}
	$Modulogroup = $this->Modulogroup->findById($id);
	$this->set('registro',$Modulogroup);
	if (!$Modulogroup) {
		throw new NotFoundException(__('Invalid post'));
	}
	if ($this->request->is(array('post', 'put'))) {
		
		$this->Modulogroup->id = $id;
		if ($this->Modulogroup->save($this->request->data)) {
			$this->Session->setFlash('Actualizado correctamente','success');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Registro Actualizado'));
	}
	if (!$this->request->data) {
		$this->request->data = $Modulogroup;
	}
}


 function delete($id) {
	if (!$this->request->is('post')) {
		throw new MethodNotAllowedException();
	}
	$item = $this->Modulogroup->read($id); 
	$this->Modulogroup->id = $id;
	$item['tienepermiso']= false;
	
	
	if($this->Modulogroup->save($item)){
	
		$this->Session->setFlash('Permiso Desactivado ','success');
		$this->redirect(array('action' => 'index'));
	}
}
	
	

}