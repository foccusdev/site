<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AtividadesController
 *
 * @author joao
 */
class AtividadesController extends AppController{
  
  public $helpers = array('Html', 'Form');
  public $name = 'Atividades';

  public function index() {
    // Traz todas as atividades cadastradas
    $this->set('atividades', $this->Atividade->find('all'));
  }
  
  public function add() {
    // Verifica se recebeu um POST
    if ($this->request->is('post')) {
      // Se sim cria um registro para o que está sendo incluído
      $this->Atividade->create();
      if ($this->Atividade->save($this->request->data)) {
        $this->Session->setFlash('Operação realizada com sucesso!');
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Session->setFlash('Ocorreu um erro e a operação não foi realizada. Por favor, tente novamente.');
      }
    }
  }  
  
  public function edit($id = null) {
    // Pega o id do registro e associa ao model
    $this->Atividade->id = $id;
    // Verifica se o registro existe
    if (!$this->Atividade->exists()) {
      throw new NotFoundException(__('Atividade inexistente'));
    }
    if ($this->request->is('post') || $this->request->is('put')) {
      if ($this->Atividade->save($this->request->data)) {
        $this->Session->setFlash(__('Operação realizada com sucesso!'));
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Session->setFlash(__('Ocorreu um erro e a operação não foi realizada. Por favor, tente novamente.'));
      }
    } else {
      $this->request->data = $this->Atividade->read(null, $id);
    }
  }  
  
  public function view($id = null) {
    // Passa o id para o model
    $this->Atividade->id = $id;
    // Envia uma variável $atividade para a view com o conteúdo do registro
    $this->set('atividade', $this->Atividade->read());
  }  
  
  public function delete($id = null) {
    
    // Verifica se a requisição foi por POST
    if (!$this->request->is('post')) {
      throw new MethodNotAllowedException();
    }
    
    // Passa o id do registro para o model
    $this->Atividade->id = $id;
    
    // Verifica se o registro existe
    if (!$this->Atividade->exists()) {
      throw new NotFoundException('Registro inválido');
    }
    
    // Verifica se o registro pôde ser deletado
    if ($this->Atividade->delete()) {
      $this->Session->setFlash('Operação realizada com sucesso!');
      $this->redirect(array('action' => 'index'));
    }
    $this->Session->setFlash(__('Ocorreu um erro! Tente novamente!'));
    $this->redirect(array('action' => 'index'));
  }  
  
  
}

?>
