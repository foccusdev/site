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
    $ordem = 'proximo_vencimento '.$direcao;
    
    // Traz todas as atividades cadastradas
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

}

?>
