<?php
class ColoresController extends AppController 
{
public $helpers = array ('Html','Form','Js');
public $components = array('Session');

function index() 
{
	
	$this->paginate =  array('Colore' => array ('limit' => 15));
	$this->set('registros',$this->paginate());
	
	//$this->set('Colore', $this->Colore->find('all'));
}


public function ver_pdf(){
    
	$this->viewClass = 'Media';
 
    $params = array(
        'id' => 'listpdfColore.pdf' ,
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
    $registros = $this->Color->find('all',array('conditions'=>$conditions));
 
    $this->set(compact('registros'));
 
    $this->layout = '/pdf/default';
    
    $this->render('/Pdf/listpdfColore');
    $this->redirect(array('action'=>'ver_pdf'));
 
}


public function view($id = null) 
{
	
	$this->Colore->id = $id;
	$this->set('Colore', $this->Colore->read());
}

public function add() {
	if ($this->request->is('post')) {
		if ($this->Colore->save($this->request->data)) {
			$this->Session->setFlash('Color guardado.');
			$this->redirect(array('action' => 'index'));
		}
	}
}


public function edit($id = null) {
if (!$id) {
	throw new NotFoundException(__('Invalid post'));
}
$Colore = $this->Colore->findById($id);
$this->set('registro', $Colore);
if (!$Colore) {
	throw new NotFoundException(__('Invalid post'));
}
if ($this->request->is(array('post', 'put'))) {
	$this->Colore->id = $id;
	if ($this->Colore->save($this->request->data)) {
		$this->Session->setFlash(__('Colore Actualizada Correctamente.'));
		return $this->redirect(array('action' => 'index'));
	}
	$this->Session->setFlash(__('Registro Actualizado'));
}
if (!$this->request->data) {
	$this->request->data = $Colore;
}
}


 function delete($id) {
	if (!$this->request->is('post')) {
		throw new MethodNotAllowedException();
	}
	if ($this->Colore->delete($id)) {
		$this->Session->setFlash('Color id: ' . $id . ' ha sido eliminado.');
		$this->redirect(array('action' => 'index'));
	}
}
	
	

}