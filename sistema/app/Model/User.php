<?php

class User extends AppModel {

  public $name = 'User';
  public $validate = array(
      'username' => array(
          'required' => array(
              'rule' => array('notEmpty'),
              'message' => 'Digite o email'
          )
      ),
      'password' => array(
          'required' => array(
              'rule' => array('notEmpty'),
              'message' => 'Digite a senha'
          )
      ),
      'role' => array(
          'valid' => array(
              'rule' => array('inList', array('admin', 'recepcionista')),
              'message' => 'Entre com um tipo de usuário válido',
              'allowEmpty' => false
          )
      )
  );

  public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
      $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }
    return true;
  }

}

?>
