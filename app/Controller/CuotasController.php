<?php
App::uses('AppController', 'Controller');
/**
 * Cuotas Controller
 *
 * @property Cuota $Cuota
 * @property PaginatorComponent $Paginator
 */
class CuotasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Cuota->recursive = 0;
		$this->set('cuotas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cuota->exists($id)) {
			throw new NotFoundException(__('Invalid cuota'));
		}
		$options = array('conditions' => array('Cuota.' . $this->Cuota->primaryKey => $id));
		$this->set('cuota', $this->Cuota->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cuota->create();
			if ($this->Cuota->save($this->request->data)) {
				$this->Flash->success(__('The cuota has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The cuota could not be saved. Please, try again.'));
			}
		}
		$formaPagos = $this->Cuota->FormaPago->find('list');
		$socios = $this->Cuota->Socio->find('list');
		$this->set(compact('formaPagos', 'socios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Cuota->exists($id)) {
			throw new NotFoundException(__('Invalid cuota'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cuota->save($this->request->data)) {
				$this->Flash->success(__('The cuota has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The cuota could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cuota.' . $this->Cuota->primaryKey => $id));
			$this->request->data = $this->Cuota->find('first', $options);
		}
		$formaPagos = $this->Cuota->FormaPago->find('list');
		$socios = $this->Cuota->Socio->find('list');
		$this->set(compact('formaPagos', 'socios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Cuota->id = $id;
		if (!$this->Cuota->exists()) {
			throw new NotFoundException(__('Invalid cuota'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cuota->delete()) {
			$this->Flash->success(__('The cuota has been deleted.'));
		} else {
			$this->Flash->error(__('The cuota could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
