<?php

class PagesController extends AppController {
    public function beforeFilter() {
        //$this->Auth->allow('*');
    }

    public function display() {
        debug($this->Auth->loggedIn());
    }
}
