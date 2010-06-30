<?php
class DesignationsController extends AppController {

	var $name = 'Designations';


	function index() {
		$this->Designation->recursive = 0;
		$this->set('designations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Designation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('designation', $this->Designation->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Designation->create();
			if ($this->Designation->save($this->data)) {
				$this->Session->setFlash(__('The Designation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Designation could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Designation', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Designation->save($this->data)) {
				$this->Session->setFlash(__('The Designation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Designation could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Designation->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Designation', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Designation->del($id)) {
			$this->Session->setFlash(__('Designation deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Designation could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>