<?php

class UsersController extends AppController {

    function beforeFileter() {
        $this->Auth->authenticate=array('Form');
    }

    function login() {
        $req = $this->request;
        if ($req->is('post')) {
            $data = $req->data;
            $this->request->data=array('User'=>$data);

            if ($this->Auth->login()) {
                $this->Session->setFlash(__('You are logged in'), 'default', array(), 'auth');
                return $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash(__('Username or password is incorrect'), 'default', array(), 'auth');
            }
        }
    }

    function logout() {
        $this->redirect($this->Auth->logout());
    }
}
