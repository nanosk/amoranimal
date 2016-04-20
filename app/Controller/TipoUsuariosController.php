<?php
App::uses('AppController', 'Controller');
/**
 * TipoUsuarios Controller
 *
 * @property TipoUsuario $TipoUsuario
 * @property PaginatorComponent $Paginator
 */
class TipoUsuariosController extends AppController {

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
		$this->TipoUsuario->recursive = 0;
		$this->set('tipoUsuarios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TipoUsuario->exists($id)) {
			throw new NotFoundException(__('Invalid tipo usuario'));
		}
		$options = array('conditions' => array('TipoUsuario.' . $this->TipoUsuario->primaryKey => $id));
		$this->set('tipoUsuario', $this->TipoUsuario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TipoUsuario->create();
			if ($this->TipoUsuario->save($this->request->data)) {
				$this->Flash->success(__('The tipo usuario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tipo usuario could not be saved. Please, try again.'));
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
		if (!$this->TipoUsuario->exists($id)) {
			throw new NotFoundException(__('Invalid tipo usuario'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TipoUsuario->save($this->request->data)) {
				$this->Flash->success(__('The tipo usuario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tipo usuario could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TipoUsuario.' . $this->TipoUsuario->primaryKey => $id));
			$this->request->data = $this->TipoUsuario->find('first', $options);
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
		$this->TipoUsuario->id = $id;
		if (!$this->TipoUsuario->exists()) {
			throw new NotFoundException(__('Invalid tipo usuario'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TipoUsuario->delete()) {
			$this->Flash->success(__('The tipo usuario has been deleted.'));
		} else {
			$this->Flash->error(__('The tipo usuario could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
