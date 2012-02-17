<?php

class PostsController extends AppController {

    public $userId;

    public $username;


    public function beforeFilter() {
        $this->userId = $this->Auth->user('id');
        $this->username= $this->Auth->user('username');
    }


    public function index() {
        $user = $this->Auth->user();
        $uid = $user['id'];
        $this->paginate = array(
            'limit' => 15,
            'order' => array(
                'Post.created'=>'desc'
            ),
            'conditions'=>array('Post.post_author'=>$uid)
        );
        $posts = $this->paginate('Post');
        $this->set('posts', $posts);
    }
    public function view($id) {
        if ($id) {
            $post = $this->Post->find('first', array('conditions'=>array('Post.ID'=>$id)));
            $this->set('post', $post);
        } else {
            return $this->redirect('/pages/notfound');
        }
    }
    public function delete($id) {
        if ($id) {
            if ($this->Post->delete($id)) {
                $this->Session->setFlash(__('Post Deleted'), 'default', array('class'=>'alert alert-success'), 'post'); 
                return $this->redirect($this->referer());
            } else {
                return $this->redirect('/pages/notfound');
            }
        } else {
            return $this->redirect($this->referer());
        }
    }
    public function add() {
        $data = $this->request->data;
        if (!empty($data)) {
            $data['post_author'] = $this->userId;
            $this->request->data = array('Post'=>$data);

            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(__('Post Saved'), 'default', array('class'=>'alert alert-success'), 'post'); 
                $this->redirect(array('action'=>'view', $this->Post->id));
            } else {
                $this->setFlash(__('Problem Saving'), 'default', array('class'=>'alert alert-error'), 'post'); 
                $this->redirect($this->referer());
            }
        } 
    }
    public function edit($id) {
        $this->Post->id = $id;
        if ($this->request->is('get')) {
            $data = $this->Post->read();
            $this->request->data = $data['Post'];
        } else {
            $data = $this->request->data;
            $this->request->data = array('Post'=>$data);

            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(__('Post Saved'), 'default', array('class'=>'alert alert-success'), 'post'); 
                $this->redirect(array('action'=>'view', $this->Post->id));
            } else {
                $this->setFlash(__('Problem Saving'), 'default', array('class'=>'alert alert-error'), 'post'); 
                $this->redirect($this->referer());
            }
        }
    }
}
