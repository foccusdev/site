<?php

class UsersController extends AppController {

  public $helpers = array('Html', 'Form');
  public $name = 'Users';

  public function index() {
    $this->set('users', $this->User->find('all'));
  }

  public function view($id = null) {
    $this->User->id = $id;
    $this->set('user', $this->User->read());
  }

  // Permite que o usuário se deslogue
  public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('logout'); 
  }

  public function login() {
    if ($this->Auth->login()) {
      $this->redirect($this->Auth->redirect());
    } else {
      $this->Session->setFlash(__('Email/Login ou senha incorretos. Por favor, tente novamente.'));
    }
  }

  public function logout() {
    $this->redirect($this->Auth->logout());
  }

  public function add() {
    if ($this->request->is('post')) {
      $this->User->create();
      if ($this->User->save($this->request->data)) {
        $this->Session->setFlash('O usuário foi criado com sucesso!');
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Session->setFlash('Ocorreu um erro e o usuário não foi criado. Por favor, tente novamente.');
      }
    }
  }

  public function edit($id = null) {
    $this->User->id = $id;
    if (!$this->User->exists()) {
      throw new NotFoundException(__('Usuário inválido'));
    }
    if ($this->request->is('post') || $this->request->is('put')) {
      if ($this->User->save($this->request->data)) {
        $this->Session->setFlash(__('Os dados do usuário foram editados com sucesso!'));
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Session->setFlash(__('Ocorreu um erro e o usuário não foi editado. Por favor, tente novamente.'));
      }
    } else {
      $this->request->data = $this->User->read(null, $id);
      unset($this->request->data['User']['password']);
    }
  }

  public function delete($id = null) {
    if (!$this->request->is('post')) {
      throw new MethodNotAllowedException();
    }
    $this->User->id = $id;
    if (!$this->User->exists()) {
      throw new NotFoundException('Usuário inválido');
    }
    if ($this->User->delete()) {
      $this->Session->setFlash('Usuário excluído com sucesso!');
      $this->redirect(array('action' => 'index'));
    }
    $this->Session->setFlash(__('O usuário não foi deletado!'));
    $this->redirect(array('action' => 'index'));
  }

}

?>
