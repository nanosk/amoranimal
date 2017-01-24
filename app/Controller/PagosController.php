<?php

class PagosController extends AppController 
{

	//copiar todo esto
	private $entity = 'Pago';
	private $controller = 'Pagos';
	
	
public $helpers = array ('Html','Form');
public $components = array('Session','RequestHandler','Paginator','Cookie');
public $paginate = array('limit' => 20,
						'order' => array(
						            'Pago.apellido' => 'asc'
						        )
					        );
public $uses = array('Pago','Socio','User');


public $botones = array(
		array( 'controller'=>'Pagos', 'action'=>'add', 'class'=>'btn btn-sm btn-flat btn-default', 'label'=>'Nuevo Pago', 'icon'=>'fa fa-plus-circle' ),
		array( 'controller'=>'Pagos', 'action'=>'index', 'class'=>'btn btn-sm btn-flat btn-default', 'label'=>'Listado Pagos ', 'icon'=>'fa fa-list' ),
		
);




public function beforeFilter() {
	parent::beforeFilter();


	//Antes de cargar la vista se setean estas variables en el LOAD

	$this->filtros =  array(
			'controller'=>'Pagos',
			'action'=>'index',
			'parametros'=>array(
					array('input'=>'socio_id','label'=>'Socio','type'=>'select2'),
					
			)
	);
	//$this->set('clientes', $this->Cliente->find('list',array('fields' =>array('Cliente.apellidoynombre'))));
	$this->set('botones',$this->botones);
	$this->set('datos', $this->filtros);


}


public function createform(){
	$form = array(
			array('type'=>'select2',   'label'=>'Socio', 'input'=>'socio_id'),
			array('type'=>'select2',   'label'=>'Forma de pago', 'input'=>'formapago_id'),
			array('type'=>'text',   'label'=>'Monto', 'input'=>'monto'),
			array('type'=>'datepicker',   'label'=>'Fecha de Pago', 'input'=>'fecha_pago'),
	        array('type'=>'checkbox',   'label'=>'Vencido', 'input'=>'vencido'),
	        
			);
	return $form;
}

public function getConditions($filterdatarequest){
	$conditions= array();

	
	
	if(!empty($filterdatarequest['socio_id'])){
		$conditions = $conditions + array('Pago.socio_id '=> $filterdatarequest['socio_id']);
	}
	
	return $conditions;
}

/*-------------------------------LISTADO INDEX-----------------------------------*/

function index() 
{
	
	$this->Paginator->settings = $this->paginate;
	$conditions = array();
	
	
	//filtro
	if ($this->request->is('post')) {
		$conditions =  $this->getConditions($this->request->data['Pagos']);
		$this->set('socios',array(''=>'NINGUNO') );
	}
	
	// Si Usuario es un socio, solo se visualizan sus pagos 
	if($this->USER_ROL == $this->ROL_SOCIO){
		$this->Socio->recursive = -1;
		
		$socio = $this->Socio->findByUserId( $this->Auth->user('id'));
		if(!$socio){
			$this->Session->setFlash('Inconsistencia de datos','error');
	//		return $this->redirect(array('controller'=>'administrador', 'action' => 'index'));
		}
		
		$conditions = array('Pago.socio_id'=> $socio['Socio']['id']);
	}
	
	
	if(isset($conditions)){
		$this->set('registros', $this->Paginator->paginate('Pago',$conditions));
	}else{
	
		$this->set('registros', $this->Paginator->paginate('Pago'));
		
		$conditions =null;
	}
	

	

	
	
}


/*-------------------------------DETALLE-----------------------------------*/
public function view($id = null) 
{
	
	$this->set('socios',$this->Pago->Socio->find('list',array('fields'=>array('cmbtexto1'))));
	$this->set('formapagos',$this->Pago->Formapago->find('list',array('fields'=>array('descripcion'))));
	
	$this->Pago->id = $id;
	$item = $this->Pago->read();
	$this->set('Pago', $item);

	if (!$this->request->data) {
		$this->request->data = $item;
	}
	$this->set('form',$this->createform());

}

/*-------------------------------ALTA-----------------------------------*/

public function add() {
	
	$this->set('socios',$this->Pago->Socio->find('list',array('fields'=>array('cmbtexto1'))));
	$this->set('formapagos',$this->Pago->Formapago->find('list',array('fields'=>array('descripcion'))));
	
	$this->set('form',$this->createform());
	
	if ($this->request->is('post')) {
		if ($this->Pago->save($this->request->data)) {
			$this->Session->setFlash('Almacenado Correctamente','success');
			$this->redirect(array('action' => 'index'));
		}
	}
}

/*-------------------------------EDITAR-----------------------------------*/
public function edit($id = null) {
	
	$this->set('socios',$this->Pago->Socio->find('list',array('fields'=>array('cmbtexto1'))));
	$this->set('formapagos',$this->Pago->Formapago->find('list',array('fields'=>array('descripcion'))));

	$this->set('id',$id);
	$this->set('form',$this->createform());
	
	if (!$id) {
		throw new NotFoundException(__('Invalid post'));
	}

	$Pago = $this->Pago->findById($id);

	if (!$Pago) {
		throw new NotFoundException(__('Invalid post'));
	}
	if ($this->request->is(array('post', 'put'))) {
		$this->Pago->id = $id;
		if ($this->Pago->save($this->request->data)) {
			$this->Session->setFlash('Actualizado Correctamente','success');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Registro Actualizado'));
	}
	if (!$this->request->data) {
		$this->request->data = $Pago;
	}
}

/*-------------------------------ELIMINAR-----------------------------------*/
 function delete($id) {
	if (!$this->request->is('post')) {
		throw new MethodNotAllowedException();
	}
	if ($this->Pago->delete($id)) {
		$this->Session->setFlash('Eliminado Correctamente','success');
		$this->redirect(array('action' => 'index'));
	}
}
	
	

}