<?php

class CuotasController extends AppController 
{

	//copiar todo esto
	private $entity = 'Cuota';
	private $controller = 'Cuotas';
	
	
public $helpers = array ('Html','Form');
public $components = array('Session','RequestHandler','Paginator','Cookie');
public $paginate = array('limit' => 20,
						'order' => array(
						            'Cuota.created' => 'desc'
						        )
					        );

public $botones = array(
		array( 'controller'=>'Cuotas', 'action'=>'add', 'class'=>'btn btn-sm btn-flat btn-default', 'label'=>'Nuevo Cuota', 'icon'=>'fa fa-plus-circle' ),
		array( 'controller'=>'Cuotas', 'action'=>'index', 'class'=>'btn btn-sm btn-flat btn-default', 'label'=>'Listado Cuotas ', 'icon'=>'fa fa-list' ),
		
);




public function beforeFilter() {
	parent::beforeFilter();


	//Antes de cargar la vista se setean estas variables en el LOAD

	$this->filtros =  array(
			'controller'=>'Cuotas',
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
			array('type'=>'text',   'label'=>'Monto Fijo', 'input'=>'monto_fijo'),
	        array('type'=>'select2',   'label'=>'Forma de Pago', 'input'=>'formapago_id'),
	        array('type'=>'datepicker',   'label'=>'Vencimiento', 'input'=>'vencimiento'),
		    array('type'=>'select2',   'label'=>'Socio', 'input'=>'socio_id'),
	        
			);
	return $form;
}

public function getConditions($filterdatarequest){
	$conditions= array();
	if(!empty($filterdatarequest['nombre'])){
		$conditions = $conditions + array('Cuota.nombre LIKE '=> '%'.$filterdatarequest['nombre'].'%');
	}
	
	return $conditions;
}

/*-------------------------------LISTADO INDEX-----------------------------------*/

function index() 
{
	
    $conditions = array();
	//filtro
	if ($this->request->is('post')) {
		$conditions = $this->getConditions($this->request->data['Cuotas']);
	}
	
	$this->Paginator->settings = $this->paginate;
	if(isset($conditions)){
		$this->set('registros', $this->Paginator->paginate('Cuota',$conditions));
	}else{
	
		$this->set('registros', $this->Paginator->paginate('Cuota'));
		
		$conditions =null;
	}
	
	$this->set('conditions',$conditions);

	
	

	
	
}


/*-------------------------------DETALLE-----------------------------------*/
public function view($id = null) 
{
	$this->Cuota->id = $id;
	$this->set('Cuota', $this->Cuota->read());
}

/*-------------------------------ALTA-----------------------------------*/

public function add() {
	
	$this->set('formapagos',$this->Cuota->Formapago->find('list',array('fields'=>array('descripcion'))));
	$this->set('socios',$this->Cuota->Socio->find('list',array('fields'=>array('cmbtexto1'))));
	$this->set('form',$this->createform());
	
	if ($this->request->is('post')) {
		if ($this->Cuota->save($this->request->data)) {
			$this->Session->setFlash('Almacenado Correctamente','success');
			$this->redirect(array('action' => 'index'));
		}
	}
}

/*-------------------------------EDITAR-----------------------------------*/
public function edit($id = null) {

	$this->set('formapagos',$this->Cuota->Formapago->find('list',array('fields'=>array('descripcion'))));
	$this->set('socios',$this->Cuota->Socio->find('list',array('fields'=>array('cmbtexto1'))));
	
	$this->set('id',$id);
	$this->set('form',$this->createform());
	
	if (!$id) {
		throw new NotFoundException(__('Invalid post'));
	}

	$Cuota = $this->Cuota->findById($id);

	if (!$Cuota) {
		throw new NotFoundException(__('Invalid post'));
	}
	if ($this->request->is(array('post', 'put'))) {
		$this->Cuota->id = $id;
		if ($this->Cuota->save($this->request->data)) {
			$this->Session->setFlash('Actualizado Correctamente','success');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Registro Actualizado'));
	}
	if (!$this->request->data) {
		$this->request->data = $Cuota;
	}
}

/*-------------------------------ELIMINAR-----------------------------------*/
 function delete($id) {
	if (!$this->request->is('post')) {
		throw new MethodNotAllowedException();
	}
	if ($this->Cuota->delete($id)) {
		$this->Session->setFlash('Eliminado Correctamente','success');
		$this->redirect(array('action' => 'index'));
	}
}
	
	

}