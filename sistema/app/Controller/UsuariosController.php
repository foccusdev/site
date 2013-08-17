<?php

class UsuariosController extends AppController {
  public $helpers = array('Html', 'Form');
  public $name = 'Usuarios';
  
  public function index() {    
    $this->set('usuarios', $this->Usuario->find('all'));
  }
  
  public function view($id=null) {
    $this->Usuario->id = $id;
    $this->set('usuario', $this->Usuario->read());
  }
  
}

?>
