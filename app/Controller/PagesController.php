<?php

class PagesController extends AppController {

    // use posts
    public $uses = array('Post');

    public function beforeFilter() {
        $this->Auth->allow('*');
    }

    public function home() {}
    public function notfound() {}

    public function photos() {
        if ($this->Auth->loggedIn()) {
            $this->redirect(array('controller'=>'photos', 'action'=>'index'));
        }
    }

    public function posts() {
        if ($this->Auth->loggedIn()) {
            $this->redirect(array('controller'=>'posts', 'action'=>'index'));
        } else {
            $this->set('posts', $this->Post->find('all', array('conditions'=>array(
                'post_status'=>'publish',
            ), 'order by'=>'desc')));
        }
    }
}
