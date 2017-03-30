<?php

class LogbackupsController extends AppController 
{

	//copiar todo esto
	private $entity = 'Logbackup';
	private $controller = 'Logbackups';
	
	
public $helpers = array ('Html','Form');
public $components = array('Session','RequestHandler','Paginator','Cookie');
public $paginate = array('limit' => 20,
						'order' => array(
						            'Logbackup.id' => 'desc'
						        )
					        );


public $botones = array(
		//array( 'controller'=>'Logbackups', 'action'=>'add', 'class'=>'btn btn-sm btn-flat btn-default', 'label'=>'Nuevo Forma de Pago', 'icon'=>'fa fa-plus-circle' ),
		//array( 'controller'=>'Logbackups', 'action'=>'index', 'class'=>'btn btn-sm btn-flat btn-default', 'label'=>'Listado Formas de Pago ', 'icon'=>'fa fa-list' ),
		//array( 'controller'=>'Logbackups', 'action'=>'create_pdf', 'class'=>'btn btn-sm btn-flat btn-default', 'label'=>'Reporte PDF ', 'icon'=>'fa fa-file-pdf-o' ),
);




public function beforeFilter() {
	parent::beforeFilter();


	//Antes de cargar la vista se setean estas variables en el LOAD

	$this->set('botones',$this->botones);
	$this->set('datos', $this->filtros);


}


public function createform(){
	$form = array(
	        array('input'=>'type','label'=>'Tipo de Operacion','type'=>'select2', 'value'=>array('EXPORT'=>'EXPORT','IMPORT'=>'IMPORT')),
			
			);
	return $form;
}

public function getConditions($filterdatarequest){
	$conditions= array();

	
	
	if(!empty($filterdatarequest['type'])){
		$conditions = $conditions + array('Logbackup.type LIKE '=> '%'.$filterdatarequest['type'].'%');
	}
	
	return $conditions;
}

/*-------------------------------LISTADO INDEX-----------------------------------*/

function index() 
{
	
    $conditions = array();
	//filtro
	if ($this->request->is('post')) {
		$conditions = $this->getConditions($this->request->data['Logbackups']);
	}
	
	$this->Paginator->settings = $this->paginate;
	if(isset($conditions)){
		$this->set('registros', $this->Paginator->paginate('Logbackup',$conditions));
	}else{
	
		$this->set('registros', $this->Paginator->paginate('Logbackup'));
		
		$conditions =null;
	}
	$this->set('conditions',$conditions);
	$this->set('registros',$this->paginate('Logbackup',$conditions));

	
	
}


/*-------------------------------DETALLE-----------------------------------*/
public function view($id = null) 
{
	
	
	$this->Logbackup->id = $id;
	$item = $this->Logbackup->read();
	$this->set('Logbackup', $item);

	if (!$this->request->data) {
		$this->request->data = $item;
	}
	$this->set('form',$this->createform());
	
}

/*-------------------------------ALTA-----------------------------------*/

public function add() {
	
	
	$this->set('form',$this->createform());
	
	if ($this->request->is('post')) {
		if ($this->Logbackup->save($this->request->data)) {
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

	$Logbackup = $this->Logbackup->findById($id);

	if (!$Logbackup) {
		throw new NotFoundException(__('Invalid post'));
	}
	if ($this->request->is(array('post', 'put'))) {
		$this->Logbackup->id = $id;
		if ($this->Logbackup->save($this->request->data)) {
			$this->Session->setFlash('Actualizado Correctamente','success');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Registro Actualizado'));
	}
	if (!$this->request->data) {
		$this->request->data = $Logbackup;
	}
}

/*-------------------------------ELIMINAR-----------------------------------*/
 function delete($id) {
	if (!$this->request->is('post')) {
		throw new MethodNotAllowedException();
	}
	if ($this->Logbackup->delete($id)) {
		$this->Session->setFlash('Eliminado Correctamente','success');
		$this->redirect(array('action' => 'index'));
	}
}
	

public function ver_pdf(){
	$this->viewClass = 'Media';

	$params = array(
			'id' => 'listpdfLogbackups.pdf' ,
			'name' => 'Reporte_FormaDePagos' ,
			'download' => false,
			'extension' => 'pdf',
			'path' => APP . 'files/pdf' . DS
	);

	$this->set($params);

}

public function create_pdf($archivo = null){

	$conditions = $this->Cookie->read('conditions');
	$registros = $this->Logbackup->find('all',array('conditions'=>$conditions));
	$this->set(compact('registros'));
	$this->layout = '/pdf/default';
	$this->render('/Pdf/listpdfLogbackups');
	$this->redirect(array('action'=>'ver_pdf'));

}

}