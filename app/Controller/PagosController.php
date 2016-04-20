<?php
App::uses('AppController', 'Controller');
/**
 * Pagos Controller
 *
 * @property Pago $Pago
 * @property PaginatorComponent $Paginator
 */
class PagosController extends AppController {

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
		$this->Pago->recursive = 0;
		$this->set('pagos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pago->exists($id)) {
			throw new NotFoundException(__('Invalid pago'));
		}
		$options = array('conditions' => array('Pago.' . $this->Pago->primaryKey => $id));
		$this->set('pago', $this->Pago->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pago->create();
			if ($this->Pago->save($this->request->data)) {
				$this->Flash->success(__('The pago has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The pago could not be saved. Please, try again.'));
			}
		}
		$socios = $this->Pago->Socio->find('list');
		$cuotas = $this->Pago->Cuota->find('list');
		$this->set(compact('socios', 'cuotas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Pago->exists($id)) {
			throw new NotFoundException(__('Invalid pago'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pago->save($this->request->data)) {
				$this->Flash->success(__('The pago has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The pago could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Pago.' . $this->Pago->primaryKey => $id));
			$this->request->data = $this->Pago->find('first', $options);
		}
		$socios = $this->Pago->Socio->find('list');
		$cuotas = $this->Pago->Cuotum->find('list');
		$this->set(compact('socios', 'cuotas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Pago->id = $id;
		if (!$this->Pago->exists()) {
			throw new NotFoundException(__('Invalid pago'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Pago->delete()) {
			$this->Flash->success(__('The pago has been deleted.'));
		} else {
			$this->Flash->error(__('The pago could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
