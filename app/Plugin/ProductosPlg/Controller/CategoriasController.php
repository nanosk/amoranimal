<?php

class CategoriasController extends AppController 
{

public $helpers = array ('Html','Form','Js');
public $uses = array('Categoria','Producto');
public $components = array('Session','RequestHandler','Paginator');




function index() 
{

	$this->paginate =  array('Categoria' => array ('limit' => 10));
	$this->set('registros',$this->paginate());
	
	
}



public function view($id = null) 
{
	$this->Categoria->id = $id;
	$this->set('categoria', $this->Categoria->read());
}

public function add() {
	if ($this->request->is('post')) {
		if ($this->Categoria->save($this->request->data)) {
			$this->Session->setFlash('Categoria guardado.');
			$this->redirect(array('action' => 'index'));
		}
	}
}

public function edit($id = null) {
if (!$id) {
	throw new NotFoundException(__('Invalid post'));
}
$categoria = $this->Categoria->findById($id);
$this->set('registro',$categoria);
if (!$categoria) {
	throw new NotFoundException(__('Invalid post'));
}
if ($this->request->is(array('post', 'put'))) {
	$this->Categoria->id = $id;
	if ($this->Categoria->save($this->request->data)) {
		$this->Session->setFlash(__('Categoria Actualizada Correctamente.'));
		return $this->redirect(array('action' => 'index'));
	}
	$this->Session->setFlash(__('Unable to update your post.'));
}
if (!$this->request->data) {
	$this->request->data = $categoria;
}
}


 function delete($id) {
	if (!$this->request->is('post')) {
		throw new MethodNotAllowedException();
	}
	if ($this->Categoria->delete($id)) {
		$this->Session->setFlash('Categoria id: ' . $id . ' ha sido eliminado.');
		$this->redirect(array('action' => 'index'));
	}
}
	
	

}