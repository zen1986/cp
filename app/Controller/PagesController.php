<?php

class PagesController extends AppController {
    public function beforeFilter() {
        $this->Auth->allow('*');
    }

    public function home() {}

    public function photos() {
        if ($this->Auth->loggedIn()) {
            $this->redirect(array('controller'=>'photos', 'action'=>'index'));
        }
    }

    public function posts() {
        if ($this->Auth->loggedIn()) {
            $this->redirect(array('controller'=>'posts', 'action'=>'index'));
        }
    }
}
