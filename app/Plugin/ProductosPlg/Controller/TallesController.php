<?php
class TallesController extends AppController 
{
public $helpers = array ('Html','Form','Js');
public $components = array('Session');

function index() 
{
	
	$this->paginate =  array('Talle' => array ('limit' => 15));
	$this->set('registros',$this->paginate());
	
	//$this->set('Talles', $this->Talle->find('all'));
}


public function ver_pdf(){
    
	$this->viewClass = 'Media';
 
    $params = array(
        'id' => 'listpdfTalles.pdf' ,
        'name' => 'your_test' ,
        'download' => false,
        'extension' => 'pdf',
        'path' => APP . 'files/pdf' . DS
    );
 
    $this->set($params);
	
}

public function create_pdf($archivo = null){
	$this->autoRender= false;
    //$conditions = $this->Cookie->read('conditions_tarjeta');
    $registros = $this->Talle->find('all',array('conditions'=>$conditions));
 
    $this->set(compact('registros'));
 
    $this->layout = '/pdf/default';
    
    $this->render('/Pdf/listpdfTalles');
    $this->redirect(array('action'=>'ver_pdf'));
 
}


public function view($id = null) 
{
	
	$this->Talle->id = $id;
	$this->set('Talle', $this->Talle->read());
}

public function add() {
	if ($this->request->is('post')) {
		if ($this->Talle->save($this->request->data)) {
			$this->Session->setFlash('Talle guardado.');
			$this->redirect(array('action' => 'index'));
		}
	}
}

public function edit($id = null) {
if (!$id) {
	throw new NotFoundException(__('Invalid post'));
}
$Talle = $this->Talle->findById($id);
$this->set('registro', $Talle);
if (!$Talle) {
	throw new NotFoundException(__('Invalid post'));
}
if ($this->request->is(array('post', 'put'))) {
	$this->Talle->id = $id;
	if ($this->Talle->save($this->request->data)) {
		$this->Session->setFlash(__('Talle Actualizada Correctamente.'));
		return $this->redirect(array('action' => 'index'));
	}
	$this->Session->setFlash(__('Registro Actualizado'));
}
if (!$this->request->data) {
	$this->request->data = $Talle;
}
}


 function delete($id) {
	if (!$this->request->is('post')) {
		throw new MethodNotAllowedException();
	}
	if ($this->Talle->delete($id)) {
		$this->Session->setFlash('Talle id: ' . $id . ' ha sido eliminado.');
		$this->redirect(array('action' => 'index'));
	}
}
	
	

}