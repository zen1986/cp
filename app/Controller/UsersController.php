<?php

class UsersController extends AppController {
    function beforeFileter() {
        $this->Auth->authenticate = array(
            'Form'=>array('userModel'=>'User')
        );
    }
    function login() {
        $req = $this->request;
        if ($req->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash(__('Username or password is incorrect'), 'default', array(), 'auth');
            }
        }
    }
}
