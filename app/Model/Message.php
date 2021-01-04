<?php
App::uses('AppModel', 'Model');

class Message extends AppModel {

    public function isOwnedBy($message, $user) {
        return $this->field('id', array('id' => $message, 'user_id' => $user)) !== false;
}
        
}