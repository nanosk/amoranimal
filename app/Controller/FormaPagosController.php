<?php
App::uses('AppController', 'Controller');
/**
 * FormaPagos Controller
 *
 * @property FormaPago $FormaPago
 * @property PaginatorComponent $Paginator
 */
class FormaPagosController extends AppController {

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
		$this->FormaPago->recursive = 0;
		$this->set('formaPagos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FormaPago->exists($id)) {
			throw new NotFoundException(__('Invalid forma pago'));
		}
		$options = array('conditions' => array('FormaPago.' . $this->FormaPago->primaryKey => $id));
		$this->set('formaPago', $this->FormaPago->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FormaPago->create();
			if ($this->FormaPago->save($this->request->data)) {
				$this->Flash->success(__('The forma pago has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The forma pago could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FormaPago->exists($id)) {
			throw new NotFoundException(__('Invalid forma pago'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FormaPago->save($this->request->data)) {
				$this->Flash->success(__('The forma pago has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The forma pago could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FormaPago.' . $this->FormaPago->primaryKey => $id));
			$this->request->data = $this->FormaPago->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FormaPago->id = $id;
		if (!$this->FormaPago->exists()) {
			throw new NotFoundException(__('Invalid forma pago'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->FormaPago->delete()) {
			$this->Flash->success(__('The forma pago has been deleted.'));
		} else {
			$this->Flash->error(__('The forma pago could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
