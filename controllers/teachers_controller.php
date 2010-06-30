<?php
class TeachersController extends AppController {

	public $name = 'Teachers';

	public function index() {
		$this->Teacher->recursive = 0;
		$this->set('teachers', $this->paginate());
	}

	public function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Teacher', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('teacher', $this->Teacher->read(null, $id));
	}

	public function add() {
		if (!empty($this->data)) {
			$this->Teacher->create();
			if ($this->Teacher->save($this->data)) {
				$this->Session->setFlash(__('The Teacher has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Teacher could not be saved. Please, try again.', true));
			}
		}
		$designations = $this->Teacher->Designation->find('list');
		$this->set(compact('designations'));
	}

	public function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Teacher', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Teacher->save($this->data)) {
				$this->Session->setFlash(__('The Teacher has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Teacher could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Teacher->read(null, $id);
		}
		$designations = $this->Teacher->Designation->find('list');
		$this->set(compact('designations'));
	}

	public function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Teacher', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Teacher->del($id)) {
			$this->Session->setFlash(__('Teacher deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Teacher could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>