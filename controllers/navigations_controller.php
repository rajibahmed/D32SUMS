<?php
class NavigationsController extends AppController {

	var $name = 'Navigations';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Navigation->recursive = 0;
		$this->set('navigations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Navigation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('navigation', $this->Navigation->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Navigation->create();
			if ($this->Navigation->save($this->data)) {
				$this->Session->setFlash(__('The Navigation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Navigation could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Navigation', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Navigation->save($this->data)) {
				$this->Session->setFlash(__('The Navigation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Navigation could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Navigation->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Navigation', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Navigation->del($id)) {
			$this->Session->setFlash(__('Navigation deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Navigation could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>