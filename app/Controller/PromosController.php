<?php

class PromosController extends AppController 
{

	//copiar todo esto
	private $entity = 'Promo';
	private $controller = 'Promos';
	
public $uses = array('Promo','Comercio','User');
public $helpers = array ('Html','Form');
public $components = array('Session','RequestHandler','Paginator','Cookie');
public $paginate = array('limit' => 20,
						'order' => array(
						            'Promo.apellido' => 'asc'
						        )
					        );

public $botones = array(
		array( 'controller'=>'Promos', 'action'=>'add', 'class'=>'btn btn-sm btn-flat btn-default', 'label'=>'Nuevo Promo', 'icon'=>'fa fa-plus-circle' ),
		array( 'controller'=>'Promos', 'action'=>'index', 'class'=>'btn btn-sm btn-flat btn-default', 'label'=>'Listado Promos ', 'icon'=>'fa fa-list' ),
		
);




public function beforeFilter() {
	parent::beforeFilter();


	//Antes de cargar la vista se setean estas variables en el LOAD

	$this->filtros =  array(
			'controller'=>'Promos',
			'action'=>'index',
			'parametros'=>array(
					array('input'=>'descripcion','label'=>'Descripcion','type'=>'text'),
					
			)
	);
	$this->set('botones',$this->botones);
	$this->set('datos', $this->filtros);


}


public function createform(){
	$comercio = array();
	if ($this->Auth->user('group_id')== $this->ROL_ADMIN ){
		
		$form = array(
			array('type'=>'select2',   'label'=>'Comercio', 'input'=>'comercio_id'),
			array('type'=>'file',   'label'=>'Logo', 'input'=>'Promo.imagen'),
			array('type'=>'textarea',   'label'=>'Descripcion', 'input'=>'descripcion'),
	        array('type'=>'textarea',   'label'=>'Condiciones', 'input'=>'condiciones'),
	        array('type'=>'datepicker',   'label'=>'Valido Desde', 'input'=>'valido_desde'),
		    array('type'=>'datepicker',   'label'=>'Valido Hasta', 'input'=>'valido_hasta'),
		    array('type'=>'checkbox',   'label'=>'Activo', 'input'=>'activo')
			);
	
		
		
	}else{
		$form = array(
		
			array('type'=>'file',   'label'=>'Logo', 'input'=>'Promo.imagen'),
			array('type'=>'textarea',   'label'=>'Descripcion', 'input'=>'descripcion'),
	        array('type'=>'textarea',   'label'=>'Condiciones', 'input'=>'condiciones'),
	        array('type'=>'datepicker',   'label'=>'Valido Desde', 'input'=>'valido_desde'),
		    array('type'=>'datepicker',   'label'=>'Valido Hasta', 'input'=>'valido_hasta'),
		    array('type'=>'checkbox',   'label'=>'Activo', 'input'=>'activo')
			);
	
		
		
	}
	
		
			

	return $form;
}

public function getConditions($filterdatarequest){
	$conditions= array();
	
	if ($this->Auth->user('group_id') == $this->ROL_COMERCIO ){
		$conditions += array('Promo.comercio_id '=> $this->Auth->user('id'));
	}
	if(!empty($filterdatarequest['descripcion'])){
		$conditions = $conditions + array('Promo.descripcion LIKE '=> '%'.$filterdatarequest['descripcion'].'%');
	}
	
	return $conditions;
}

/*-------------------------------LISTADO INDEX-----------------------------------*/

function index() 
{
	
    $conditions = array();
	
	if ($this->USER_ROL == $this->ROL_COMERCIO ){
		$comercio = $this->Comercio->findByUserId($this->Auth->user('id'));
		$comercio_id = $comercio['Comercio']['id'];
		$conditions = $conditions + array('Promo.comercio_id '=> $comercio_id);
	}
	
	//filtro
	if ($this->request->is('post')) {
		$conditions = $this->getConditions($this->request->data['Promos']);
	}
	
	$this->Paginator->settings = $this->paginate;
	
	if(isset($conditions)){
		$this->set('registros', $this->Paginator->paginate('Promo',$conditions));
	}else{
		
		$this->set('registros', $this->Paginator->paginate('Promo'));
		
		$conditions =null;
	}
	
	$this->set('conditions',$conditions);

	
	$this->set('registros',$this->paginate('Promo',$conditions));

	
	
}


/*-------------------------------DETALLE-----------------------------------*/
public function view($id = null) 
{
	
	$this->set('form',$this->createform());

	$this->Promo->id = $id;
	$item = $this->Promo->read();
	$this->set('Promo', $item);

	if (!$this->request->data) {
		$this->request->data = $item;
	}

}

/*-------------------------------ALTA-----------------------------------*/

public function add() {
	
	$this->set('comercios',$this->Promo->Comercio->find('list',array('fields'=>array('razon_social'))));
	
	$this->set('form',$this->createform());
	
	if ($this->request->is('post')) {
		//debug($this->request->data);
		
		
			if ($this->Promo->save($this->request->data)) {
				
				if ($this->Auth->user('group_id')== $this->ROL_COMERCIO ){
					$datos = array('comercio_id'=> $this->Auth->user('id'));
					$this->Promo->save($datos);
				}
				
			
			
			}
		
			
			$this->Session->setFlash('Almacenado Correctamente','success');
			$this->redirect(array('action' => 'index'));
		}

}

/*-------------------------------EDITAR-----------------------------------*/
public function edit($id = null) {

	$this->set('comercios',$this->Promo->Comercio->find('list',array('fields'=>array('razon_social'))));	
	$this->set('id',$id);
	$this->set('form',$this->createform());
	
	if (!$id) {
		throw new NotFoundException(__('Invalid post'));
	}

	$Promo = $this->Promo->findById($id);

	if (!$Promo) {
		throw new NotFoundException(__('Invalid post'));
	}
	if ($this->request->is(array('post', 'put'))) {
		$this->Promo->id = $id;
		if ($this->Promo->save($this->request->data)) {
			$this->Session->setFlash('Actualizado Correctamente','success');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Registro Actualizado'));
	}
	if (!$this->request->data) {
		$this->request->data = $Promo;
	}
}

/*-------------------------------ELIMINAR-----------------------------------*/
 function delete($id) {
	if (!$this->request->is('post')) {
		throw new MethodNotAllowedException();
	}
	if ($this->Promo->delete($id)) {
		$this->Session->setFlash('Eliminado Correctamente','success');
		$this->redirect(array('action' => 'index'));
	}
}
	
	

}