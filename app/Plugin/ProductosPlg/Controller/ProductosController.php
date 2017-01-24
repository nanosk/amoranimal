<?php

class ProductosController extends AppController 
{
public $helpers = array ('Html','Form','Js');
public $components = array('Session','RequestHandler','Cookie');
public $uses =array('Producto','Marca','Categoria');



function index() {
	if ($this->request->is('post')) {
	    //si hizo click en  Buscar	
		$filtros = $this->request->data['Productos'];
		
		//debug($filtros);
	    $conditions = array();
		if(!empty($filtros['descripcion'])){
			$conditions = $conditions + array('Producto.descripcion LIKE '=> '%'.$filtros['descripcion'].'%');
		}
		if(!empty($filtros['nombre'])){
			$conditions = $conditions + array('Producto.nombre LIKE '=>'%'.$filtros['nombre'].'%');
		}
		
		
	}
	
	$this->paginate =  array('Producto' => array ('limit' => 20));
	
	
	if(isset($conditions)){
    	$this->set('registros',$this->paginate('Producto',$conditions));
    	
    }else{
    	$this->set('registros',$this->paginate('Producto'));
    	$conditions =null;	
    }
	$this->Cookie->write('conditions_productos', $conditions);
}



public function add() {
	
	
	$this->set('marcas',$this->Producto->Marca->find('list', array('fields' => array('Marca.descripcion'))));
	$this->set('categorias',$this->Producto->Categoria->find('list', array('fields' => array('Categoria.descripcion'))));
	if ($this->request->is('post')) {
		if ($this->Producto->save($this->request->data)) {
			$this->Session->setFlash('Producto guardado.');
			$this->redirect(array('action' => 'index'));
		}
	}
}

public function edit($id = null) {

$this->set('marcas',$this->Producto->Marca->find('list', array('fields' => array('Marca.descripcion'))));
$this->set('categorias',$this->Producto->Categoria->find('list', array('fields' => array('Categoria.descripcion'))));	


if (!$id) {
	throw new NotFoundException(__('Invalid post'));
}
$producto = $this->Producto->findById($id);

if (!$producto) {
	throw new NotFoundException(__('Invalid post'));
}
$this->set('registro',$producto);

if ($this->request->is(array('post', 'put'))) {
	$this->Producto->id = $id;
	if ($this->Producto->save($this->request->data)) {
		$this->Session->setFlash(__('Actualizado Correctamente'));
		return $this->redirect(array('action' => 'index'));
	}
	$this->Session->setFlash(__('Unable to update your post.'));
}
if (!$this->request->data) {
	$this->request->data = $producto;
}
}


 function delete($id) {
	if (!$this->request->is('post')) {
		throw new MethodNotAllowedException();
	}
	if ($this->Producto->delete($id)) {
		$this->Session->setFlash('The producto with id: ' . $id . ' has been deleted.');
		$this->redirect(array('action' => 'index'));
	}
}



}