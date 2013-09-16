<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MatriculasController
 *
 * @author joao
 */
class MatriculasController extends AppController {

  public $helpers = array('Html', 'Form', 'Js');
  public $name = 'Matriculas';

  // Método para autorizar recepcionistas a adicionar, editar e excluir Matrículas
  public function isAuthorized($user) {
    //var_dump($user);
    // Verficia se não foi autorizado pelo método da classe AppController (ou seja, não é administrador)
    if (!parent::isAuthorized($user)) {

      // Verifica se é recepcionista
      if ($user['role'] == 'recepcionista') {
        // Se for, libera o acesso  
        return true;
      } else {
        // Se não for recepcionista, nem administrador, não libera o acesso
        return false;
      }
    } else {
      // Se ele foi autorizado pelo método da classe AppController, ele é administrador. Libera o acesso
      return true;
    }

    // Em qualquer outro caso, não libera o acesso
    return false;
  }

  public function index() {

    $direcao = ' ASC ';
    $ordem = 'proximo_vencimento ' . $direcao;

    // Traz todas as matriculas cadastradas
    $this->set('matriculas', $this->Matricula->find('all', array('order' => $ordem)));
  }

  public function add() {

    // Verifica se o formulário foi submetido
    if ($this->request->is('post')) {
      $this->Matricula->create();
      if ($this->Matricula->save($this->request->data)) {
        $this->Session->setFlash('Matrícula realizada com sucesso!');
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Session->setFlash('Ocorreu um erro e o aluno não foi matriculado. Por favor, tente novamente ou entre em contato com o desenvolvedor.');
      }
    }

    // Traz os Planos
    $this->loadModel('Plano');
    $args = array('fields' => array('id', 'nome'));
    $this->set('planos', $this->Plano->find('list', $args));

    // Traz os estados 
    $this->loadModel('Estado');
    $args = array('fields' => array('id', 'Descricao'));
    $this->set('estados', $this->Estado->find('list', $args));

    // Traz as cidades do RJ
    $this->loadModel('Cidade');
    $args = array(
        'conditions' => array('Cidade.UF' => '19'),
        'fields' => array('Codigo', 'Descricao')
    );
    $this->set('cidades', $this->Cidade->find('list', $args));

    // Traz os bairros do Rio de Janeiro (7043)
    $this->loadModel('Bairro');
    $args = array(
        'conditions' => array('Bairro.CodigoCidade' => '7043'),
        'fields' => array('Codigo', 'Descricao')
    );
    $this->set('bairros', $this->Bairro->find('list', $args));
  }

  public function edit($id = null) {
    // Pega o id do registro e associa ao model
    $this->Matricula->id = $id;
    // Verifica se o registro existe
    if (!$this->Matricula->exists()) {
      throw new NotFoundException(__('Matricula inexistente'));
    }
    if ($this->request->is('post') || $this->request->is('put')) {
    
      if ($this->Matricula->save($this->request->data)) {
        $this->Session->setFlash(__('Operação realizada com sucesso!'));
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Session->setFlash(__('Ocorreu um erro e a operação não foi realizada. Por favor, tente novamente.'));
      }
    } else {
      
      $matricula = $this->Matricula->read(null, $id);
      $this->set('matriculas', $matricula);
      
      $this->request->data = $matricula;

      // Traz os Planos
      $this->loadModel('Plano');
      $args = array('fields' => array('id', 'nome'));
      $this->set('planos', $this->Plano->find('list', $args));

      // Traz os estados 
      $this->loadModel('Estado');
      $args = array('fields' => array('id', 'Descricao'));
      $this->set('estados', $this->Estado->find('list', $args));

      // Traz as cidades do RJ
      $this->loadModel('Cidade');
      $args = array(
          'fields' => array('Codigo', 'Descricao')
      );
      $this->set('cidades', $this->Cidade->find('list', $args));

      // Traz os bairros do Rio de Janeiro (7043)
      $this->loadModel('Bairro');
      $args = array(
          'fields' => array('Codigo', 'Descricao')
      );
      $this->set('bairros', $this->Bairro->find('list', $args));
    }
  }

  public function view($id = null) {
    // Passa o id para o model
    $this->Matricula->id = $id;
    // Envia uma variável $matricula para a view com o conteúdo do registro
    $matricula = $this->Matricula->read();
    $this->set('matricula', $matricula);

    // Traz o plano
    $this->loadModel('Plano');
    $args = array('fields' => array('nome'), 'conditions' => array('id' => $matricula['Matricula']['plano']));
    $this->set('planos', $this->Plano->find('first', $args));

    // Traz o estado
    $this->loadModel('Estado');
    $args = array('fields' => array('Descricao'), 'conditions' => array('id' => $matricula['Matricula']['estado']));
    $this->set('estados', $this->Estado->find('first', $args));

    // Traz a cidade 
    $this->loadModel('Cidade');
    $args = array(
        'conditions' => array('Cidade.Codigo' => $matricula['Matricula']['cidade']),
        'fields' => array('Descricao')
    );
    $this->set('cidades', $this->Cidade->find('first', $args));

    // Traz o bairro 
    $this->loadModel('Bairro');
    $args = array(
        'conditions' => array('Bairro.Codigo' => $matricula['Matricula']['bairro']),
        'fields' => array('Descricao')
    );
    $this->set('bairros', $this->Bairro->find('first', $args));
  }

  public function delete($id = null) {

    // Verifica se a requisição foi por POST
    if (!$this->request->is('post')) {
      throw new MethodNotAllowedException();
    }

    // Passa o id do registro para o model
    $this->Matricula->id = $id;

    // Verifica se o registro existe
    if (!$this->Matricula->exists()) {
      throw new NotFoundException('Registro inválido');
    }

    // Verifica se o registro pôde ser deletado
    if ($this->Matricula->delete()) {
      $this->Session->setFlash('Operação realizada com sucesso!');
      $this->redirect(array('action' => 'index'));
    }
    $this->Session->setFlash(__('Ocorreu um erro! Tente novamente!'));
    $this->redirect(array('action' => 'index'));
  }

}

?>
