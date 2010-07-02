<?php
class PagesController extends AppController {

	var $name = 'Pages';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Page->recursive = 0;
		$this->set('pages', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Page', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('page', $this->Page->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Page->create();
			if ($this->Page->save($this->data)) {
				$this->Session->setFlash(__('The Page has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Page could not be saved. Please, try again.', true));
			}
		}
		$navigations = $this->Page->Navigation->find('list');
		$this->set(compact('navigations'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Page', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Page->save($this->data)) {
				$this->Session->setFlash(__('The Page has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Page could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Page->read(null, $id);
		}
		$navigations = $this->Page->Navigation->find('list');
		$this->set(compact('navigations'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Page', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Page->del($id)) {
			$this->Session->setFlash(__('Page deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Page could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>