<?php

class ModulosController extends AppController 
{

public $helpers = array ('Html','Form');
public $components = array('Session','RequestHandler','Paginator','Cookie');
public $paginate = array('limit' => 20,
						'order' => array(
						            'Modulo.controller' => 'asc'
						        )
					        );


//copiar todo esto
private $entity = 'Modulo';
private $controller = 'Modulos';



public $botones = array(
		array( 'controller'=>'Modulos', 'action'=>'add', 'class'=>'btn btn-sm btn-flat btn-default', 'label'=>'Nuevo Modulo', 'icon'=>'fa fa-plus-circle' ),
		array( 'controller'=>'Modulos', 'action'=>'index', 'class'=>'btn btn-sm btn-flat btn-default', 'label'=>'Listado Modulos ', 'icon'=>'fa fa-list' ),
		array( 'controller'=>'Modulos', 'action'=>'detectarmodulos', 'class'=>'btn  btn-sm btn-success btn-flat', 'label'=>'Detectar modulos ', 'icon'=>'glyphicon glyphicon-plus-sign' ),
		array( 'controller'=>'Modulos', 'action'=>'eliminarmodulos', 'class'=>'btn  btn-sm btn-danger btn-flat', 'label'=>'Eliminar Todos los Modulos ', 'icon'=>'fa fa-cross' ),
				
		
);




public function beforeFilter() {
	parent::beforeFilter();

	$this->filtros =  array(
			'controller'=>'Modulos',
			'action'=>'index',
			'parametros'=>array(
					array('input'=>'controller','label'=>'Modulo','type'=>'text'),
					array('input'=>'action','label'=>'Vista','type'=>'text'),
					
			)
	);
	//Antes de cargar la vista se setean estas variables en el LOAD


	$this->set('datos', $this->filtros);
	$this->set('botones',$this->botones);
	


}


public function getConditions($filterdatarequest){
	$conditions= array();

	
	
	if(!empty($filterdatarequest['controller'])){
		$conditions = $conditions + array('controller LIKE '=> '%'.$filterdatarequest['controller'].'%');
	}
	if(!empty($filterdatarequest['action'])){
		$conditions = $conditions + array('action LIKE '=> '%'.$filterdatarequest['action'].'%');
	}
	
	return $conditions;
}

public function createform(){

	$form = array(array('type'=>'text', 'label'=>'Modulo','input'=>'controller'),
			array('type'=>'text',   'label'=>'Vista', 'input'=>'action'));

	return $form;
}


function detectarmodulos(){
	//$this->autorender = false;
	App::import('Core', 'File');
	$Controllers = App::objects('controller');
	$resultado = array();
	//$this->Modulo->query('truncate table modulos');
	
	
	$result = $this->Modulo->find('all');	
	if(!$result){
		foreach ($Controllers as $item){
			$nameController = str_replace("Controller","",$item);
			//INDEX
			$registro = array( 'controller' => strtoupper($nameController), 'action' =>'INDEX');
			$this->Modulo->create($registro);
			$this->Modulo->save();
			$resultado = 	$resultado + $registro;

			//VIEW
			$registro = array( 'controller' => strtoupper($nameController), 'action' =>'VIEW');
			$this->Modulo->create($registro);
			$this->Modulo->save();
			$resultado = 	$resultado + $registro;
			
			//ADD 
			$registro = array( 'controller' => strtoupper($nameController), 'action' =>'ADD');
			$this->Modulo->create($registro);
			$this->Modulo->save();
			$resultado = 	$resultado + $registro;
			
			//EDIT 
			$registro = array( 'controller' => strtoupper($nameController), 'action' =>'EDIT');
			$this->Modulo->create($registro);
			$this->Modulo->save();
			$resultado = 	$resultado + $registro;
			
			//DELETE
			$registro = array( 'controller' => strtoupper($nameController), 'action' =>'DELETE');
			$this->Modulo->create($registro);
			$this->Modulo->save();
			$resultado = 	$resultado + $registro;
		}
		
			//OTROS PERMISOS
						
			
			
			$registro = array( 'controller' => strtoupper('PAGINAS'), 'action' =>strtoupper('PROMOCIONES'));
			$this->Modulo->create($registro);
			$this->Modulo->save();
			
			$registro = array( 'controller' => strtoupper('PAGINAS'), 'action' =>strtoupper('CONSULTASOCIO'));
			$this->Modulo->create($registro);
			$this->Modulo->save();
			
			
			$registro = array( 'controller' => strtoupper('PAGINAS'), 'action' =>strtoupper('ADMINISTRADOR'));
			$this->Modulo->create($registro);
			$this->Modulo->save();
			
			
			$registro = array( 'controller' => strtoupper('MODULOGROUPS'), 'action' =>strtoupper('ASIGNARPERMISOS'));
			$this->Modulo->create($registro);
			$this->Modulo->save();
			
			
			
			$registro = array( 'controller' => strtoupper('USERS'), 'action' =>strtoupper('MICUENTAADMIN'));
			$this->Modulo->create($registro);
			$this->Modulo->save();
			
			
			$registro = array( 'controller' => strtoupper('USERS'), 'action' =>strtoupper('MICUENTA'));
			$this->Modulo->create($registro);
			$this->Modulo->save();
			
			
			$registro = array( 'controller' => strtoupper('USERS'), 'action' =>strtoupper('MICUENTACOMERCIO'));
			$this->Modulo->create($registro);
			$this->Modulo->save();
			
			
	}
	$this->Session->setFlash('Modulos creados correctamente','success');	
	$this->redirect(array('action' => 'index'));
	//$this->redirect(array('action' => 'index'));
	
}

function eliminarmodulos(){
	$this->autorender = false;
	
	$this->Modulo->query('truncate table modulos');
	$this->Session->setFlash('Eliminados correctamente','success');	
	$this->redirect(array('action' => 'index'));
	
}

function index() 
{
	
	//filtro
	if ($this->request->is('post')) {
		$conditions = $this->getConditions($this->request->data['Modulos']);
	}
	
	$this->Paginator->settings = $this->paginate;
	if(isset($conditions)){
		$this->set('registros', $this->Paginator->paginate('Modulo',$conditions));
	}else{
	
		$this->set('registros', $this->Paginator->paginate('Modulo'));
		
		$conditions =null;
	}
	
	
	
	
}



public function view($id = null) 
{
	
	$this->Modulo->id = $id;
	$this->set('Modulo', $this->Modulo->read());
}

public function add() {
	
	$this->set('form',$this->createform());
	if ($this->request->is('post')) {
		
		$this->request->data['Modulo']['controller'] = strtoupper($this->request->data['Modulo']['controller']);
		$this->request->data['Modulo']['action'] = strtoupper($this->request->data['Modulo']['action']);
		
		if ($this->Modulo->save($this->request->data)) {
			$this->Session->setFlash('Guardado correctamente','success');
			$this->redirect(array('action' => 'index'));
		}
	}
}

public function edit($id = null) {

	$this->set('form',$this->createform());
	if (!$id) {
		throw new NotFoundException(__('Invalid post'));
	}
	$Modulo = $this->Modulo->findById($id);
	$this->set('registro',$Modulo);
	if (!$Modulo) {
		throw new NotFoundException(__('Invalid post'));
	}
	if ($this->request->is(array('post', 'put'))) {
		$this->request->data['Modulo']['controller'] = strtoupper($this->request->data['Modulo']['controller']);
		$this->request->data['Modulo']['action'] = strtoupper($this->request->data['Modulo']['action']);
		
		$this->Modulo->id = $id;
		if ($this->Modulo->save($this->request->data)) {
			$this->Session->setFlash('Actualizado correctamente','success');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Registro Actualizado'));
	}
	if (!$this->request->data) {
		$this->request->data = $Modulo;
	}
}


 function delete($id) {
	if (!$this->request->is('post')) {
		throw new MethodNotAllowedException();
	}
	if ($this->Modulo->delete($id)) {
		$this->Session->setFlash('Eliminado correctamente','success');
		$this->redirect(array('action' => 'index'));
	}
}
	
	

}