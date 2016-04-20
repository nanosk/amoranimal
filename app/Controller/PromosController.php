<?php
App::uses('AppController', 'Controller');
/**
 * Promos Controller
 *
 * @property Promo $Promo
 * @property PaginatorComponent $Paginator
 */
class PromosController extends AppController {

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
		$this->Promo->recursive = 0;
		$this->set('promos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Promo->exists($id)) {
			throw new NotFoundException(__('Invalid promo'));
		}
		$options = array('conditions' => array('Promo.' . $this->Promo->primaryKey => $id));
		$this->set('promo', $this->Promo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Promo->create();
			if ($this->Promo->save($this->request->data)) {
				$this->Flash->success(__('The promo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The promo could not be saved. Please, try again.'));
			}
		}
		$comercios = $this->Promo->Comercio->find('list');
		$this->set(compact('comercios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Promo->exists($id)) {
			throw new NotFoundException(__('Invalid promo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Promo->save($this->request->data)) {
				$this->Flash->success(__('The promo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The promo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Promo.' . $this->Promo->primaryKey => $id));
			$this->request->data = $this->Promo->find('first', $options);
		}
		$comercios = $this->Promo->Comercio->find('list');
		$this->set(compact('comercios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Promo->id = $id;
		if (!$this->Promo->exists()) {
			throw new NotFoundException(__('Invalid promo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Promo->delete()) {
			$this->Flash->success(__('The promo has been deleted.'));
		} else {
			$this->Flash->error(__('The promo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
