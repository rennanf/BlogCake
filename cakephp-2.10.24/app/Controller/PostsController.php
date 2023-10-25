<?php

class PostsController extends AppController
{
	public $helpers = array('Html', 'Form');

	public function index()
	{
		
		$this->layout = 'sidebar_top';

		$data_ini = $this->request->data('from_date');
		$data_fim = $this->request->data('to_date');
		$title = $this->request->data('title');

		 json_encode($this->Session->write('title' ,  $title  ));




        if ( empty($title) && (empty($data_ini) && empty($data_fim))) {
			$query2 = "SELECT * FROM posts";
			$this->set('posts', $this->Post->query($query2));
		}else if ((!empty($title)) && ((!empty($data_ini) && (!empty($data_fim))))){

			$query4 = "SELECT * FROM posts WHERE title ILIKE  '%$title%' AND created BETWEEN  '$data_ini' AND '$data_fim' ORDER BY title";
			$result = $this->Post->query($query4);
			$this->set('posts', $result);

		} else if (!empty($title)) {

			$query3 = "SELECT * FROM posts WHERE title ILIKE '%$title%' ORDER BY title ";
			$result = $this->Post->query($query3);
			$this->set('posts', $result);
		} else if (!empty($data_ini) && !empty($data_fim)) {

			$query = "SELECT * FROM posts WHERE created BETWEEN '$data_ini' AND '$data_fim' ";
			$result = $this->Post->query($query);
			$this->set('posts', $result);
		}


		}
		public function telabranca(){
			$this->layout = 'sidebar_top';
		}






	public function view($id = null)
	{
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}

		$post = $this->Post->findById($id);
		if (!$post) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->set('post', $post);
	}

	public function add()
	{
		if ($this->request->is('post')) {

			$this->request->data['Post']['user_id'] = $this->Auth->user('id');
			if ($this->Post->save($this->request->data)) {
				$this->Flash->success(__('Your post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
		}
	}

	public function edit($id = null)
	{
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}

		$post = $this->Post->findById($id);
		if (!$post) {
			throw new NotFoundException(__('Invalid post'));
		}

		if ($this->request->is(array('post', 'put'))) {
			$this->Post->id = $id;
			if ($this->Post->save($this->request->data)) {
				$this->Flash->success(__('Your post has been updated.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Flash->error(__('Unable to update your post.'));
		}

		if (!$this->request->data) {
			$this->request->data = $post;
		}
	}

	public function delete($id)
	{
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Post->delete($id)) {
			$this->Flash->success(
				__('The post with id: %s has been deleted.', h($id))
			);
		} else {
			$this->Flash->error(
				__('The post with id: %s could not be deleted.', h($id))
			);
		}

		return $this->redirect(array('action' => 'index'));
	}

	public function isAuthorized($user)
	{
		// All registered users can add posts
		if ($this->action === 'add') {
			return true;
		}

		// The owner of a post can edit and delete it
		if (in_array($this->action, array('edit', 'delete'))) {
			$postId = (int)$this->request->params['pass'][0];
			if ($this->Post->isOwnedBy($postId, $user['id'])) {
				return true;
			}
		}

		return parent::isAuthorized($user);
	}

}
