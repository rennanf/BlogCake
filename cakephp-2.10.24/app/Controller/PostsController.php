<?php

class PostsController extends AppController {
	public $helpers = array('Html', 'Form', 'Flash');
	public $components = array('Flash');

	public function index() {
		$this->set('posts', $this->Post->find('all'));
	}

	public function view($id) {
		$this->set('post', $this->Post->findById($id));
	}

	public function add() {
		if ($this->request->is('post')) {
			if ($this->Post->save($this->request->data)) {
				$this->Flash->success('Postagem Salva');
				$this->redirect(array('action' => 'index'));
			}
		}
	}

	function edit($id = null) {
		$this->Post->id = $id;
		if ($this->request->is('post')) {
			$this->request->data = $this->Post->findById($id);
		} else {
			if ($this->Post->save($this->request->data)) {
				$this->Flash->success('Your post has been updated.');
				$this->redirect(array('action' => 'index'));
			}
		}
	}

	function delete($id) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		if ($this->Post->delete($id)) {
			$this->Flash->success('The post with id: ' . $id . ' has been deleted.');
			$this->redirect(array('action' => 'index'));
		}
	}
}
