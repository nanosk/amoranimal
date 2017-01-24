<?php

class MarcasController extends AppController 
{

public $helpers = array ('Html','Form');
public $components = array('Session');





function index() 
{
	
	$this->paginate =  array('Marca' => array ('limit' => 10));
	$this->set('registros',$this->paginate());
	
	//$this->set('Marcas', $this->Marca->find('all'));
}



public function view($id = null) 
{
	
	$this->Marca->id = $id;
	$this->set('Marca', $this->Marca->read());
}

public function add() {
	if ($this->request->is('post')) {
		if ($this->Marca->save($this->request->data)) {
			$this->Session->setFlash('Marca guardado.');
			$this->redirect(array('action' => 'index'));
		}
	}
}

public function edit($id = null) {
if (!$id) {
	throw new NotFoundException(__('Invalid post'));
}
$Marca = $this->Marca->findById($id);
$this->set('registro',$Marca);
if (!$Marca) {
	throw new NotFoundException(__('Invalid post'));
}
if ($this->request->is(array('post', 'put'))) {
	$this->Marca->id = $id;
	if ($this->Marca->save($this->request->data)) {
		$this->Session->setFlash(__('Marca Actualizada Correctamente.'));
		return $this->redirect(array('action' => 'index'));
	}
	$this->Session->setFlash(__('Registro Actualizado'));
}
if (!$this->request->data) {
	$this->request->data = $Marca;
}
}


 function delete($id) {
	if (!$this->request->is('post')) {
		throw new MethodNotAllowedException();
	}
	if ($this->Marca->delete($id)) {
		$this->Session->setFlash('Marca id: ' . $id . ' ha sido eliminado.');
		$this->redirect(array('action' => 'index'));
	}
}
	
	

}