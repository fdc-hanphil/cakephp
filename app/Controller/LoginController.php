<?php

class UsersController extends AppController{
    public $helpers = array('Html', 'Form');

    public function index(){
        $this->set('messages', $this->Message->find('all'));
    }
}